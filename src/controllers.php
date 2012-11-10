<?php
/**
Controllers of app
 * @author: Pablo Fernandez Franco
 * @author web: http://www.pablo-franco.com
*/

use Symfony\Component\HttpFoundation\Response;

/*$app->get('/', function(){
    return new Response('Hello world');
});*/

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name);
});

//Application

$app->get('/', function() use($app){
    return $app->redirect('home');

})->bind('root');

$app->get('/home', function() use($app){
    //$dto = new Dto\VideoDTO();
    return $app['twig']->render('home.html.twig', array('rute' => 'home'));

})->bind('home');

$app->get('/trabajos', function() use($app){
    return $app['twig']->render('trabajos.html.twig', array('rute' => 'trabajos'));

})->bind('trabajos');

