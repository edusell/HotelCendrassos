<?php

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per esborrar tipus d'habitacions.
***************************/

function ctrlborrtipus($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $ids = $_REQUEST['tipus'];
//    print_r($ids);

    
    $reserva->droptipus($ids);

    $origen = $_REQUEST['origen'];

    if(isset($origen)){
        header('Location:index.php?r='.$origen);
    } else{
    header ('Location: index.php?r=admin');
    }

    return $resposta;
}