<?php
/**
File configuration application
 * @author: Pablo Fernandez Franco
 * @author web: http://www.pablo-franco.com
*/

//Config Silex

//Enable debug
$app['debug'] = true;

//Register services
//Monolog
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/log/development.log',
));

//Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/web',
));

//Doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'path'      => __DIR__.'/app.db',
        'host'      => 'mysql_read.someplace.tld',
        'dbname'    => 'my_database',
        'user'      => 'my_username',
        'password'  => 'my_password'
    ),
));

//Url Generator
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

