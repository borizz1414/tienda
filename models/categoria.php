<?php 


class Categoria{
    //sera privadas pq solo podemos acceder a ellas por metodos
    private $id;
    private $nombre;
    private $db;
	public function __construct(){
        $this->db=Database::connect();
    }
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
    }
    public function getOne(){
        $categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()};");
        return $categoria->fetch_object();
    }
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
	}
	public function save(){
        $sql="INSERT INTO categorias VALUES(null,'{$this->getNombre()}')";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
        
	}
}






?>