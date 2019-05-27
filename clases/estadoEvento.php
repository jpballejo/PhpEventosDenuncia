<?php
require_once ("clase_base.php");
require_once ("session.php");

class EstadoEvento extends ClaseBase {
    private $id = 0;
	private $nombre = '';
	public $descripcion = '';
            
    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="estadoEvento";
        parent::__construct($tabla);

    }
   
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    
    public function setId($id){
        $this->id=$id;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    

    public function agregar(){
        
        $id=$this->getId();
        $nombre=$this->getNombre();
        $descripcion=$this->getDescripcion();
                

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO estadoEvento 
        (id, nombre, descripcion) 
           VALUES (?,?,?)" );
        $stmt->bind_param("iss",$id,$nombre,$descripcion);
        return $stmt->execute();
    
    }

    
   
}
?>