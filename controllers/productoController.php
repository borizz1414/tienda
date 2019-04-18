<?php 

class productoController{
    public function index(){
        //renderizar vista
        require_once 'views/layout/slider.php';
        require_once 'views/producto/destacados.php';
    }
}
?>