<?php
require "clases/clase_base.php";
require "clases/estadoEvento.php";
require "clases/Evento.php";
require "clases/usuario.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');


class ControladorEvento extends ControladorIndex {




 function listadoEstados($params=array()){
 	
 	
 	$ci = Auth::estaLogueado();
 	$userLogin = null;
 	if(isset($ci)){
 		$usuario=new Usuario(); 
        $userLogin = $usuario->obtenerPorCI($ci);
    } else {
    	$this->redirect("inicio","principal");
    }	 

	$buscar="";
	$titulo="ListadoEventos";
	$mensaje="";
	if(!empty($params)){
		if($params[0]=="borrar"){
			$estadoEvento=new EstadoEvento();
			$idABorrar=$params[1];
	 		if($estadoEvento->borrar($idABorrar)){
	 			//Redirigir al listado
	 			//header('Location: index.php');exit;
	 			$this->redirect("evento","listadoEstados");
	 		}else{
	 			//Mostrar error
	 			//$eveto=$usuario->obtenerPorId($idABorrar);
	 			//$mensaje="Error!! No se pudo borrar el usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
	 			$mensaje="ERROR. No existe el usuario";
	 			$estados=$estadoEvento->getListado();	
	 		}
		}else{
	 		$estado=new EstadoEvento();
			$estados=$estado->getListado();	
	 	}
	}else{
 		$estado=new EstadoEvento();
		$estados=$estado->getListado();
 	}

 	
	
	//Llamar a la vista
 	$tpl = Template::getInstance();
 	$datos = array(
    'estados' => $estados,
    'usuario' => $userLogin,
    'buscar' => $buscar,
    'titulo' => $titulo,
    'mensaje' => $mensaje,
    );

	$tpl->asignar('evento_nuevoEstado',$this->getUrl("evento","nuevoEstado"));
	$tpl->mostrar('evento_listadoEstados',$datos);

}



function nuevoEstado(){
	$mensaje="";
	$ci = Auth::estaLogueado();

    $userLogin = null;
 	if(isset($ci)){
 		$usuario=new Usuario(); 
        $userLogin = $usuario->obtenerPorCI($ci);
 		
        if(isset($_POST["nombre"])){

        	$est= new estadoEvento();
			$est->setNombre($_POST["nombre"]);
			$est->setDescripcion($_POST["descripcion"]);
			
			if($est->agregar()){
				$this->redirect("evento","listadoEstados");
				exit;
			}else{
				$mensaje="Error! No se pudo agregar el nuevo estado";
			}

		
		}
		$tpl = Template::getInstance();
		$tpl->asignar('titulo',"Nuevo Estado");
		$tpl->asignar('buscar',"");
		$tpl->asignar('usuario', $userLogin);
		$tpl->asignar('mensaje',$mensaje);
		$tpl->mostrar('evento_nuevoEstado',array());


    } else {
    	$this->redirect("inicio","principal");
    }


	
}

function nuevo(){
	$mensaje="";
	$ci = Auth::estaLogueado();

    $userLogin = null;
 	if(isset($ci)){

 		$usuario=new Usuario(); 
        $userLogin = $usuario->obtenerPorCI($ci);
 		
        if(isset($_POST["nombre"])){

        	$evento= new Evento();
			$evento->setNombre($_POST["nombre"]);
			$evento->setDescripcion($_POST["descripcion"]);
			$evento->setLongitud($_POST["longitud"]);
			$evento->setLatitud($_POST["latitud"]);
			$estado = $_POST['Idestado'];
			var_dump($estado); 
			
			date_default_timezone_set('America/Montevideo');
            $fecha = date("Y-m-d H:i:s");
            //print_r($_POST);
            $estado = substr($estado,1,3);
            $est = (int)$estado;
            $evento->setEstado($est);
            $path = "uploads/" ."_" . str_replace(":", "-", $fecha) . "_" . basename($_FILES["img_evento"]["name"]);
            //echo $path;
           if (move_uploaded_file($_FILES["img_evento"]["tmp_name"], $path)) {
            		$evento->setFoto($path);
            		if($evento->agregar()){
						$this->redirect("inicio","principal");
						exit;
					}else{
						$mensaje="Error! No se pudo agregar el nuevo evento";
					}

            }else{
            	$mensaje="Error! al subir el archivo";
            }
            

			
			
		
		}
		$tpl = Template::getInstance();
		$est= new estadoEvento();
		$estados = $est->getListado();
		$tpl->asignar('titulo',"Nuevo Evento");
		$tpl->asignar('buscar',"");
		$tpl->asignar('estados', $estados);
		$tpl->asignar('mensaje',$mensaje);
		$tpl->asignar('usuario', $userLogin);
		$tpl->mostrar('evento_nuevo',array());


    } else {
    	$this->redirect("inicio","principal");
    }


	
}


 function obtenerEvento($params = array()) {
    header('Content-type: application/json');
    

    if (!isset($params[0]) || $params[0] == "") {
        $response_array['status'] = 'error';
        $response_array['error'] = 'No hay id de evento';
        echo json_encode($response_array);
        return;
    }

    $evento = (new Evento ())->obtenerEventoPorId($params[0]);
    
    $response_array['status'] = 'success';
    $response_array['evento'] = $evento;    

    echo json_encode($response_array);
 }






}
?>