<?php

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per esborrar reserves.
***************************/

function ctrlborrreserva($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $origen=$_REQUEST['origen'];

    $ids = $_GET['reserves'];
    print_r($ids);
    
    
    $reserva->dropreserva($ids);


    if(!isset($origen)){
        header ('Location: index.php?r=admin');
    } else if($origen=="adminreserva"){
        header ('Location: index.php?r=adminreserva');
    }

    $resposta->SetTemplate("admin.php");

    return $resposta; 
}