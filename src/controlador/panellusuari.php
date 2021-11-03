<?php

function ctrPanellusuari($peticio, $resposta, $imatges){
    session_start();
  
    if(!isset($_SESSION['DNI'])){
      header("location: index.php?r=login");
    }

    $dni = $_SESSION['DNI'];
  

    include '../src/config.php';
    $resposta->SetTemplate("panellusuari.php");

    $dada = new \Daw\llistartipushab($config["db"]);
    $dades = $dada->getdadesUser($dni);
    $resposta->set("llistar_dades", $dades);
    $dades_reserva = $dada->getpanellreserva($dni);
    $resposta->set("llistar_panell_reserva", $dades_reserva);

    //print_r($resposta);
    //sdie();

    return $resposta;


}

