<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controlador/inici.php";
include "../src/controlador/admin.php";
include "../src/controlador/habitacio.php";
include "../src/controlador/panell_usuaris.php";
include "../src/controlador/panell_reservas.php";
include "../src/controlador/panell_calendari.php";
include "../src/controlador/panell_habitacio.php";
include "../src/controlador/Galeria.php";
include "../src/controlador/login.php";


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
} else if($r == "habitacions"){
    $resposta = ctrlHabitacio($peticio, $resposta, $imatges);
}else if($r == "adminusuari"){
    $resposta = ctrlAdminusuari($peticio, $resposta, $imatges);
}else if($r == "adminreserva"){
    $resposta = ctrlAdminreserva($peticio, $resposta, $imatges);
}else if($r == "admincalendari"){
    $resposta = ctrlAdmincalendari($peticio, $resposta, $imatges);
}else if($r == "adminhabitacio"){
    $resposta = ctrlAdminhabitacio($peticio, $resposta, $imatges);
}else if($r == "galeria"){
    $resposta = ctrlGaleria($peticio, $resposta, $imatges);
}else if($r == "login"){
    $resposta = ctrlLogin($peticio, $resposta, $imatges);
}

$resposta->resposta();