<?php

function ctrPanellusuari($peticio, $resposta, $imatges){
    include '../src/config.php';
    $resposta->SetTemplate("panellusuari.php");

    return $resposta;
}