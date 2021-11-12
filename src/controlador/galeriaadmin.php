<?php 

function ctrlgaleriaadmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $resposta->SetTemplate("galeriaadmin.php");

    return $resposta; 
}