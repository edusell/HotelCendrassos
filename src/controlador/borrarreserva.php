<?php

function ctrlborrreserva($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $ids = $_GET['reserves'];
    print_r($ids);
    
    
    $reserva->dropreserva($ids);

    header ('Location: index.php?r=admin');

    $resposta->SetTemplate("admin.php");

    return $resposta; 
}