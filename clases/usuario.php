<?php
require_once ("clase_base.php");
require_once ("session.php");

class Usuario extends ClaseBase {
	public $nombre = '';
	public $apellido = '';
    public $ci = '';
	public $telefono = 0;
    private $fnac = "";
    private $contrasenia = "";
    public $activo = true;
    public $email='';
    private $admin = false;
    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuarios";
        parent::__construct($tabla);

    }
   
    public function getTelefono() {
        return $this->telefono;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getCI() {
        return $this->ci;
    }
    public function getEmail() {
        return $this->email;
    }

    public function getActivo(){
        return $this->activo;
    }

    public function esAdmin () {
        return $this->admin;
    }

    public function getFnac () {
        return $this->fnac;
    }

    public function getContrasenia () {
        return $this->contrasenia;
    }


    public function setFnac($fnac){
        $this->fnac=$fnac;
    }

    public function setContrasenia($contrasenia){
        $this->contrasenia=$contrasenia;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setCI($ci){
        $this->ci=$ci;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    public function setAdmin ($admin) {
        $this->admin = $admin;
    }

    public function setActivo($activo){
        $this->activo = $activo;
    }

    public function getBusqueda($buscar){
        $usuarios=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuarios 
            WHERE nombre like ? " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $buscar= '%'.$buscar.'%';
        $stmt->bind_param( "s",$buscar);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $persona= new Usuario($fila);
                $usuarios[]=$persona;
        }
        return $usuarios;
    }

    public function agregar(){
        
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $telefono=$this->getTelefono();
        $ci=$this->getCI();
        $password = sha1($this->getContrasenia());
        $email=$this->getEmail();
        $act = 1;
        $admin = $this->esAdmin();
        $fnac = $this->getFnac();

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuarios 
        (ci, nombre, apellido,email, contrasenia, telefono,activo,fnac,admin) 
           VALUES (?,?,?,?,?,?,?,?,?)" );
        $stmt->bind_param("isssssisi",$ci,$nombre,$ape,$email,$password,$telefono,$act,$fnac,$admin);
        return $stmt->execute();
    
    }

    public function login($email,$pass){

        ini_set("display_errors", 1);
        error_reporting(E_ALL & ~E_NOTICE);

                
        $stmt = $this->getDB()->prepare( "SELECT * from  usuarios WHERE email=? AND contrasenia=?" );
        $stmt->bind_param("ss",$email,$pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado->num_rows<1){
            echo "retorno falso";
            return false;
        }    
        $res=$resultado->fetch_object();
        Session::init();
        Session::set('usuario_logueado', true);
        Session::set('usuario_ci', $res->ci);
        Session::set('usuario_nombre', $res->nombre);
        Session::set('usuario_email', $res->email);
        return true;
    }
    
   public function logout(){
        Session::init();
        Session::destroy();
   } 

   public function obtenerPorCI($ci){

        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuarios 
            WHERE ci= ? " );
        
        $stmt->bind_param( "s",$ci);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila=$resultado->fetch_object();
        $persona= new Usuario($fila);
        
        return $persona;        
    }
}
?>