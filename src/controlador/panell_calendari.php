<?php

function ctrlAdmincalendari($peticio, $resposta, $imatges){

    include '../src/config.php';

    $model = new \Daw\llistartipushab($config["db"]);

    $dades = $model->calendari();
    $resposta->set("arraycalendari", $dades);

    
    $resposta->SetTemplate("admin_calendari.php");
    return $resposta;
}