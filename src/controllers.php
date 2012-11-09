<?php
/**
Controllers of app
 * @author: Pablo Fernandez Franco
 * @author web: http://www.pablo-franco.com
 * Please do not remove the credits
*/

use Symfony\Component\HttpFoundation\Response;

$app->get('/', function(){
    return new Response('Hello world');
});

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name);
});