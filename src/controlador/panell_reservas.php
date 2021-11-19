<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per dirigir al panell reserves del menu d'administracio, llista les reserves amb tota la seva informacio sobre el tipus d'habitracio i s
***************************/

function ctrlAdminreserva($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $reserves = $model->getreserva();
    $resposta->set("llistar_reserves", $reserves);

    $resposta->SetTemplate("admin_reserves.php");
    return $resposta;
}