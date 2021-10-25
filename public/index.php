<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controlador/inici.php";
include "../src/controlador/admin.php";

$r="";
$r = $_REQUEST["r"];

/* Creem els diferents models */
$resposta = new Daw\Resposta();
//$peticio = new Daw\Peticio();
//$imatges = new Daw\ImatgesSQLite($config["sqlite"]);
//$imatges = new Daw\ImatgesPDO($config["db"]);
//echo ($r);
if ($r == "") {
    $resposta = ctrlPortada($peticio, $resposta, $imatges);
} else if($r == "admin"){
    $resposta = ctrlAdmin($peticio, $resposta, $imatges);
}

$resposta->resposta();