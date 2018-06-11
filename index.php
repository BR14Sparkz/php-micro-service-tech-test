<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function vd($o, $t = '') {
    echo $t ? "$t => " : '';
    var_dump($o);
}

function vdd($o, $t) {
    vd($o, $t);
    die;
}

// Include Routes Class
include 'Router.php';

// Get the requested Route
$request = $_SERVER['REQUEST_URI'];

$router = new Router($request);
$router->get('/vegetables', 'api/vegetable/read.php');
