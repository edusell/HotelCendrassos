<?php

function ctrlGaleria($peticio, $resposta, $imatges){

    $resposta->SetTemplate("galeria.php");
    return $resposta;
}