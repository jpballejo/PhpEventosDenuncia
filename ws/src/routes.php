<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

require "../../clases/clase_base.php";
require "../../clases/estadoEvento.php";
require "../../clases/Evento.php";


return function (App $app) {
    $container = $app->getContainer();

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeletonhhhhh '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    $app->get('/ticket/{id}', function (Request $request, Response $response, $args) use ($container) {
        //$ticket_id = (int)$args['id'];
        
        //$mensaje="error, no se encontró ticket";
                
        //$container->get('logger')->info("/ticket/id",array($args));
        //$response->getBody()->write(json_encode(['ticket' => $ticket_id,'mensaje'=>$mensaje]));
        //return $response;

        $params=$request->getParams();
        $evento_id = (int)$params['id'];


        $response_data = array(); 
        $response_data['error'] = false; 
        $evento = (new Evento ())->obtenerEventoPorId($evento_id);
        $response_data['evento'] = $evento; 
        $response->write(json_encode($response_data));
        return $response
            ->withHeader('Content-type', 'application/json')
            ->withStatus(200);
        


    });

    

    $app->post('/evento/{id}', function (Request $request, Response $response, $args) use ($container) {
        $params=$request->getParams();
        $evento_id = (int)$params['id'];


        $response_data = array(); 
        $response_data['error'] = false; 
        $evento = (new Evento ())->obtenerEventoPorId($params[0]);
        $response_data['evento'] = $evento; 
        $response->write(json_encode($response_data));
        return $response
            ->withHeader('Content-type', 'application/json')
            ->withStatus(200);
        
        
    });

};
