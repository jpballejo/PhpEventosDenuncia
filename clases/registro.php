<?php
require_once ("clase_base.php");
require_once ("session.php");

class Registro extends ClaseBase {
    private $id = 0;
    private $idEvento = 0;
	private $fecha = '';
	private $estadosEventos = null;
        
    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="registros";
        parent::__construct($tabla);

    }
   
    public function getId() {
        return $this->id;
    }
    public function getIdEvento() {
        return $this->idEvento;
    }
    public function getFecha() {
        return $this->fecha;
    }
    public function getEstadosEventos() {
        return $this->estadosEventos;
    }
    
    public function setId($id){
        $this->id=$id;
    }

    public function setIdEvento($idEvento){
        $this->idEvento=$idEvento;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function setEstadosEventos($estadosEventos){
        $this->estadosEventos=$estadosEventos;
    }
    
    
   
}
?>