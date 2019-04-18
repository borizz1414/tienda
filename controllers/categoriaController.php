<?php 
require_once 'models/categoria.php';
class categoriaController{
    public function index(){
        Utilities::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categorias/index.php';
        

    }
    public function crear(){
        require_once 'views/categorias/crear.php';
        Utilities::isAdmin();
    }
    public function save(){
        //comprobar si el usuario es admin
        Utilities::isAdmin();
        if(isset($_POST) && isset($_POST['nombre'])){
        //guardar categoria
        $categoria = new Categoria();
        $categoria->setNombre($_POST['nombre']);
        $categoria->save();
        }
        header("Location:".base_url."categoria/index");
    }
    

}
?>