<?php

require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get("/pruebas", function() use($app){
    echo "Hola mundo";
});

$app->run();

?> 