<?php 
require_once 'models/usuario.php';
class usuarioController{
    public function index(){
        echo "Controlador Usuario, accion index";
    }
    public function registro(){
        require_once 'views/usuario/registro.php';
    }
  public function save(){
    $errores = array();
      if(isset($_POST)){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['apellidos'] : false;
        // Validar los datos antes de guardarlos en la base de datos
        // Validar campo nombre
        if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
          $nombre_validado = true;
        } else {
          $nombre_validado = false;
          $errores['nombre'] = "El nombre no es válido";
        }

        // Validar apellidos
        if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
          $apellidos_validado = true;
        } else {
          $apellidos_validado = false;
          $errores['apellidos'] = "Los apellidos no son válido";
        }

        // Validar el email
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $email_validado = true;
        } else {
          $email_validado = false;
          $errores['email'] = "El email no es válido";
        }

        // Validar la contraseña
        if (!empty($password)) {
          $password_validado = true;
        } else {
          $password_validado = false;
          $errores['password'] = "La contraseña está vacía";
        }
        if($nombre_validado==true && $apellidos_validado==true && $email_validado==true && $password_validado==true){

        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setEmail($_POST['email']);
        $usuario->setPassword($_POST['password']);
        $save = $usuario->save();
        }
        if($save){
          $_SESSION['register'] = 'complete';
        }else{
          $_SESSION['register'] = 'failed';
        }
      }
      else{
        $_SESSION['register'] = 'failed';
       
      }
      header("Location:".base_url."usuario/registro");
  }
  public function login(){
    if(isset($_POST)){
      //identificar al usuario
      //consultar a la base de datos
      $usuario = new Usuario();
      $usuario->setEmail($_POST['email']);
      $usuario->setPassword($_POST['password']);
      $identity = $usuario->login();
      if($identity && is_object($identity)){
        $_SESSION['identity']= $identity;
        if($identity->rol == 'admin'){
          $_SESSION['admin']= true;
        }
      }else{
        $_SESSION['error_login']="identificacion fallida";
      }

    }
    header('Location:'.base_url);
  }
}
?>