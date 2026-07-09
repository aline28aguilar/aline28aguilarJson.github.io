<?php

require_once __DIR__ . "/../libservidorphp/recibeJson.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

$json = recibeJson();
$saludo = $json->saludo;
$nombre = "Aline Lizeth Aguilar Alcantara";
$resultado = "{$saludo} {$nombre}.";
devuelveJson($resultado);