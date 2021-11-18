<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per dirigir a la pagina de contacte.
***************************/

function ctrlcontacte($peticio, $resposta, $imatges){

    $resposta->SetTemplate("contacte.php");
    return $resposta;
}