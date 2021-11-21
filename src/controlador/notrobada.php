<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per redirigir a la pagina no trobada.php quan el valor de r sigui incorrecte.
***************************/

function notrobada($peticio, $resposta, $imatges){
    
    $resposta->SetTemplate("notrobada.php");


    return $resposta;
}