<?php

function ctrlregistre($peticio, $resposta, $imatges){

    $resposta->SetTemplate("registre.php");
    return $resposta;
}