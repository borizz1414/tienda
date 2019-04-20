<?php 
require_once 'models/producto.php';
class productoController{
    public function index(){
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
            var_dump($_POST);
        }
    }
}
?>