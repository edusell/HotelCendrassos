<?php

function ctrlAdmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $reserves = $reserva->getreserva();
    $tipus = $reserva->gettipus();

    //print_r($reserves);
    $resposta->set("llistar_tipus", $tipus);
    $resposta->set("llistar_reserves", $reserves);

    $resposta->SetTemplate("admin.php");

    return $resposta;
}