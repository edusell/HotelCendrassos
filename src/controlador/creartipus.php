<?php

function ctrlcreartipus($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);
    $m = $_GET['m'];
    $omax = $_GET['omax'];
    $preu = $_GET['preu'];
    $nom = $_GET['nom'];
    $descripcio = $_GET['descripcio'];
    $servei = "Aquesta habitacio disposa de serveis de nateja i d'esmorzar";
    $directori = "C";
    $id= $reserva->ultimidtipus()+1;   
    $reserva->creartipus($id,$m,$servei,$omax,$descripcio,$nom,$preu,$directori);

    //print_r($id);
    //die();
    header ('Location: index.php?r=admin');
    $resposta->SetTemplate("admin.php");

    return $resposta;
}