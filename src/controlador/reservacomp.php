<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per redirigir a la pagina de confirmacio de reserva.
***************************/

function ctrlreservacomp($peticio, $resposta, $imatges){
    
    $resposta->SetTemplate("reservacomp.php");


    return $resposta;
}