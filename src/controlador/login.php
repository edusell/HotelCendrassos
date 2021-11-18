<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per redirigir al login guardant la url de la pagina d'on es prove.
***************************/

function ctrlLogin($peticio, $resposta, $imatges){
    
    $expiryTime = time()+(300); 
    setcookie('HTTP_REFERER',$_SERVER['HTTP_REFERER'],$expiryTime,'/');

    $resposta->SetTemplate("login.php");


    return $resposta;
}