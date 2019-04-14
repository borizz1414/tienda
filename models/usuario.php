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
		return $this->password;
	}

	public function  setPassword($password) {
		$this->password = password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT, ['cost'=>4]);
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
    
}
?>