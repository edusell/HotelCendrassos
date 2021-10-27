<?php

function ctrlAdmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $reserves = $reserva->getreserva();

    //print_r($reserves);

    $resposta->set("llistar_reserves", $reserves);

    $resposta->SetTemplate("admin.php");

    return $resposta;
}