<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador dirigir a la galeria.
***************************/

function ctrlGaleria($peticio, $resposta, $imatges){

    $resposta->SetTemplate("galeria.php");
    return $resposta;
}