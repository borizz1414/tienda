<?php
class Producto{
    //sera privadas pq solo podemos acceder a ellas por metodos
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
	private $oferta;
    private $fecha;
    private $imagen;


    public function __construct(){
        $this->db=Database::connect();
    }
    public function getId() {
        return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
    }
    public function getCategoriaId() {
        return $this->categoria_id;
	}

	public function setCategoriaId($categoria_id) {
		$this->categoria_id = $categoria_id;
    }
    public function getNombre() {
        return $this->nombre;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
	}

	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
    }
    public function getPrecio() {
        return $this->precio;
	}

	public function setPrecio($precio) {
		$this->precio = $precio;
    }
    public function getStock() {
        return $this->stock;
	}

	public function setStock($stock) {
		$this->stock = $stock;
    }
    public function getOferta() {
        return $this->oferta;
	}

	public function setOferta($oferta) {
		$this->oferta = $oferta;
    }
    public function getFecha() {
        return $this->fecha;
	}

	public function setFecha($fecha) {
		$this->fecha = $fecha;
    }
    public function getImagen() {
        return $this->imagen;
	}

	public function setImagen($imagen) {
		$this->imagen = $imagen;
    }
    public function getAll(){
        $producto = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $producto;
    }
    public function save(){
        $sql="INSERT INTO productos VALUES(null,'{$this->getNombre()}','{$this->getDescripcion()}','{$this->getPrecio()}','{$this->getStock()}',null, CURDATE(),null)";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
        
    }
   
}
}
?>