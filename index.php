<?php
require_once __DIR__.'/vendor/autoload.php'; 

$app = new Silex\Application(); 

// Esse linha mostra o hello world
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
    }); 
$app->run(); 
