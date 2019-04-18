<?php 


class Usuario{
    //sera privadas pq solo podemos acceder a ellas por metodos
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $imagen;
	private $rol;
	private $db;
	
    public function __construct(){
        $this->db=Database::connect();
    }

	public function  getId() {
		return $this->id;
	}

	public function  setId($id) {
		$this->id = $id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public  function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	public function getApellidos() {
		return $this->apellidos;
	}

	public function  setApellidos($apellidos) {
		$this->apellidos = $this->db->real_escape_string($apellidos);
	}

	public function getEmail() {
		return $this->email;
	}

	public function  setEmail($email) {
		$this->email = $this->db->real_escape_string($email);
	}

	public function getPassword() {
		return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT, ['cost'=>4]);
	}

	public function  setPassword($password) {
		$this->password = $password;
	}

	public function getImagen() {
		return $this->imagen;
	}

	public function setImagen($imagen) {
		$this->imagen = imagen;
	}

	public function getRol() {
		return $this->rol;
	}

	public function setRol($rol) {
		$this->rol = $rol;
	}

    public function save(){
        $sql="INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user', null)";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
        
	}
	public function login(){
		$resultado=false;
		$email = $this->email;
		$password = $this->password;
		
		//comprobar si existe el usuario
		$sql="SELECT * FROM usuarios where email = '$email'";
		$login = $this->db->query($sql);
		if($login && $login->num_rows ==1){
			$usuario = $login->fetch_object();
			//verificar clave
			$verify  = password_verify($password, $usuario->password);
			
			if($verify){
			$resultado = $usuario;
			}
		}
		return $resultado;
	}
    
}
?>