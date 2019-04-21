<?php 
require_once 'models/producto.php';
class productoController{
    public function index(){
       
        $producto = new Producto();
        $productos = $producto->getRandom(4);
        //renderizar vista
        require_once 'views/layout/slider.php';
        require_once 'views/producto/destacados.php';
    }
    public function gestion(){
        
        Utilities::isAdmin();//comprobar si es administrador
        $producto = new Producto();
        $productos = $producto->getAll();//Todo el select se guardara en productos
        require 'views/producto/gestion.php';
        
    }
    public function crear(){
        Utilities::isAdmin();//Comprobar si es admin
        require_once 'views/producto/crear.php';
    }
    public function save(){
        Utilities::isAdmin();
        if(isset($_POST)){
            $nombre = $_POST['nombre'];
            $descripcion= $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $categoria =  $_POST['categoria'];
            $producto = new Producto();
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setCategoriaId($categoria);
    

            //guardar imagen
            if(isset($_FILES['imagen'])){
            $file = $_FILES['imagen'];
            $filename = $file['name'];
            $mimetype = $file['type'];
            if($mimetype == "image/png" || $mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/gif"){
                if(!is_dir('uploads/images')){
                    mkdir('uploads/images', 0777, true);//crear carpeta recursivamente
                }
                $producto->setImagen($filename);
                move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                
            }
        }
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            $producto->setId($id);
            $save = $producto->edit();
            }else{
            $save = $producto->save();
            }
            if($save){
                $_SESSION['producto'] = "complete";
            }else{
                $_SESSION['producto'] = "failed";
            }
         }else{
            $_SESSION['producto'] = "failed";
         }
         header("Location:".base_url."producto/gestion");
    }
    public function editar(){
        Utilities::IsAdmin();
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $edit=true;
            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getOne();
            require_once 'views/producto/crear.php';
        }else{
            header('Location:'.base_url.'producto/gestion');
        }
       

    }
    public function eliminar(){
        Utilities::IsAdmin();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $producto->delete();
        
            if($delete){
                $_SESSION['delete'] = "complete";
            }else{
                $_SESSION['delete'] = "failed";
            }
            
        }
        header('Location:'.base_url.'producto/gestion');

    }

    
}
?>