<?php

$rota = key($_GET)?key($_GET):"home";

// var_dump($rota);

$controller = $rota."Controller";

include_once 'controllers/'.$controller.".php";

$object = new $controller();
$object->viewHome();
$object->acao($rota)


 ?>
