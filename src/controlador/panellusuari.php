<?php

function ctrPanellusuari($peticio, $resposta, $imatges){
    session_start();

    $dni = $_SESSION['DNI'];
  //$dni='000000000';

    include '../src/config.php';
    $resposta->SetTemplate("panellusuari.php");

    $dada = new \Daw\llistartipushab($config["db"]);
    $dades = $dada->getdadesUser($dni);
    $resposta->set("llistar_dades", $dades);

    //print_r($resposta);
    //sdie();

    return $resposta;


}

