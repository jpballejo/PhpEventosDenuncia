<?php
require_once ("clases/usuario.php");
require_once ("clases/clase_base.php");
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');
require_once('clases/evento.php');
require_once('clases/estadoEvento.php');


class ControladorInicio extends ControladorIndex {


function principal () {
		
		$ci = Auth::estaLogueado();
		$esAdmin = null;
		$eventos = (new Evento())->obtenerEventos();
		if($ci!=null){			
			$usuario = (new Usuario())->obtenerPorCI($ci);
			if ( $usuario -> esAdmin () ==  1 ) {
				$esAdmin = true;	

			}
			$datos = array(
				'usuario' => $usuario,
				'eventos' => $eventos,
				'esAdmin' => $esAdmin,

				//listar lista de baches
			);					
		} else {

			$datos = array(
				'eventos' => $eventos,
				//listar lista de baches
			);
		}

		$tpl = Template::getInstance();
		$tpl->mostrar('inicio',$datos);
		
		
}

 
function buscar($params=array()){
 	
 	Auth::estaLogueado();

	$buscar="";
	$titulo="Listado";
	$mensaje="";
	$usuarios=array();
	if(isset($_POST["buscar"]) && $_POST["buscar"]!="" ){
			$titulo="Buscando..";
	 		$usuario=new Usuario();
	 		$buscar=$_POST["buscar"];
			$usuarios=$usuario->getBusqueda($buscar);	
	}else{
		$usuario=new Usuario();
		$usuarios=$usuario->getListado();
	}
 	
	//Llamar a la vista
	//require_once("vistas/usuarios_listado.php");
	
 	$tpl = Template::getInstance();
 	$datos = array(
    'usuarios' => $usuarios,
    'buscar' => $buscar,
    'titulo' => $titulo,
    'mensaje' => $mensaje,
    );

	
	$tpl->asignar('usuario_nuevo',$this->getUrl("usuario","nuevo"));
	$tpl->mostrar('usuarios_listado',$datos);

}

function nuevo(){
	$mensaje="";
	if(isset($_POST["nombre"])){
		$usr= new Usuario();
		$usr->setNombre($_POST["nombre"]);
		$usr->setApellido($_POST["apellido"]);
		$usr->setCI($_POST["ci"]);
		$usr->setTelefono($_POST["telefono"]);
		$usr->setEmail($_POST["email"]);
		if($usr->agregar()){
			$this->redirect("usuario","listado");
			exit;
		}else{
			$mensaje="Error! No se pudo agregar el usuario";
		}

		
	}
	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nuevo Usuario");
	$tpl->asignar('buscar',"");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('usuarios_nuevo',array());

}
function login(){

	$mensaje="";
				
	if(isset($_POST["email"])){
		$usr= new Usuario();
		$email=$_POST["email"];
		$pass=sha1($_POST["password"]);

		if($usr->login($email,$pass)){
			$this->redirect("inicio","principal");
			exit;
		}else{
			$mensaje="Error! Error de usuario o password";
		}

		
	}
	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nuevo Usuario");
	$tpl->asignar('loginUrl',"");
	$tpl->asignar('buscar',"");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('usuarios_login',array());

}
function logout(){
	$usr= new Usuario();
	$usr->logout();
	$this->redirect("inicio","principal");
}

function favoritos(){
	$usuario=new Usuario();
	$usuarios=$usuario->getListado();	
	echo json_encode($usuarios);
}

function editar($params){
	$ci = $params[0];
	$us = new Usuario();
	$usselec =$us->obtenerPorCI($ci);

	$mensaje="";
	if(isset($_POST["nombre"])){
		$usr= new Usuario();
		$usr->setCI($ci);
		$usr->setNombre($_POST["nombre"]);
		$usr->setApellido($_POST["apellido"]);
		$usr->setTelefono($_POST["telefono"]);
		$usr->setEmail($_POST["email"]);
		if($usr->editar()){
			$this->redirect("usuario","listado");
			exit;
		}else{
			$mensaje="Error! No se pudo editar el usuario";
		}

		
	}
	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nuevo Usuario");
	$tpl->asignar('buscar',"");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->asignar('persona',$usselec);
	$tpl->mostrar('usuarios_editar',array());

}

}
?>