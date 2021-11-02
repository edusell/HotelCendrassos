<?php

function ctrPanellusuari($peticio, $resposta, $imatges){
    include '../src/config.php';
    $resposta->SetTemplate("panellusuari.php");

    $dada = new \Daw\llistartipushab($config["db"]);
    $dades = $dada->getdadesUser();
    $resposta->set("llistar_dades", $dades);
    
    
    return $resposta;


}

