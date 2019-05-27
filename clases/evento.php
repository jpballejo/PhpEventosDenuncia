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
    private $act = 0;
    private $estado = null;
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
        return $this->titulo;
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
        return $this->estado;
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
        $this->estado=$estado;
    }

    public function setRegistroEstados($registroEstado){
        $this->registroEstado=$registroEstado;
    }
    

    public function agregar(){
        
        $nombre=$this->nombre();
        $descripcion=$this->getDescripcion();
        $longitud=$this->getLongitud();
        $latitudid=$this->getLongitud();
        $foto=$this->getFoto();
        $estado=$this->getEstado();
        $act = 1;
        $registroEstado = $this->registroEstado();
        

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO eventos 
        (nombre, descripcion,longitud, latitud, foto,estado,activo) 
           VALUES (?,?,?,?,?,?,?,?,?)" );
        $stmt->bind_param("sssssii",$nombre,$descripcion,$longitud,$latitud,$foto,$estado,$activo);
        return $stmt->execute();
    
    }

    function subirImg($name){

    $target_dir = "uploads/";
    $mensaje = "";
    $target_file = $target_dir . basename($_FILES["img"][$name]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $mensaje = "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
       //echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $mensaje= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           return $uploadOk;
    } else {
        return $mensaje;
    }


}


    
   
}
?>