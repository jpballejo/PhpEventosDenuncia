<?php
require_once ("clase_base.php");
require_once ("session.php");

class Evento extends ClaseBase {
    private $id = 0;
	private $nombre = '';
    private $descripcion = '';
	private $longitud = '';
    private $latitud = '';
	private $foto = "";    
    private $idEstado = null;
    private $activo = 0;
    private $registrosEstados = null;
    
    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="eventos";
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
    public function getLongitud() {
        return $this->longitud;
    }
    public function getLatitud() {
        return $this->latitud;
    }
    public function getFoto() {
        return $this->foto;
    }

    public function getEstado(){
        return $this->idEstado;
    }

     public function getActivo(){
        return $this->activo;
    }


    public function getRegistrosEstados() {
        return $this->registrosEstados;
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

    public function setLongitud($longitud){
        $this->longitud=$longitud;
    }
    
    public function setLatitud($latitud){
        $this->latitud=$latitud;
    }

    public function setFoto($foto){
        $this->foto=$foto;
    }

    public function setEstado($estado){
        $this->idEstado=$estado;
    }

    public function setActivo($activo){
        $this->activo=$activo;
    }

    public function setRegistroEstados($registroEstado){
        $this->registroEstado=$registroEstado;
    }
    

    public function agregar(){

        ini_set("display_errors", 1);
        error_reporting(E_ALL & ~E_NOTICE);
        
        $nombre=$this->getnombre();
        $descripcion=$this->getDescripcion();
        $longitud=$this->getLongitud();
        $latitud=$this->getLongitud();
        $foto=$this->getFoto();
        $estado=$this->getEstado();
        $act = 1;
        $registroEstado = $this->getRegistrosEstados();
        

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO evento 
        (nombre,descripcion,longitud,latitud,foto,idEstado,activo) 
           VALUES (?,?,?,?,?,?,?)" );
        $stmt->bind_param("sssssii",$nombre,$descripcion,$longitud,$latitud,$foto,$estado,$act);
        return $stmt->execute();
    
    }

    


public function obtenerEventos(){

    ini_set("display_errors", 1);
    error_reporting(E_ALL & ~E_NOTICE);

    $sql="select * from evento where activo=1";
    $res=NULL;
    $resultado =$this->getDB()->query($sql)   
    or die ("<h3 style='text-align: center; margin-top: 5%'>Fallo en la consulta</h3>");

    $resultados=array();

    while ( $fila = $resultado->fetch_object() )
    {
            
        $res= new $this->modelo($fila);
        $res->setEstado((new EstadoEvento())->obtenerPorId($res->getEstado()));
        $resultados[]=$res;
    } 
     
    return $resultados;      
    
}

    
   
}
?>