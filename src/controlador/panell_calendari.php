<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per dirigir a admin_calendari.php amb els dies festius.
***************************/

function ctrlAdmincalendari($peticio, $resposta, $imatges){

    include '../src/config.php';

    $model = new \Daw\llistartipushab($config["db"]);

    $dades = $model->calendari();
    $resposta->set("arraycalendari", $dades);

    
    $resposta->SetTemplate("admin_calendari.php");
    return $resposta;
}