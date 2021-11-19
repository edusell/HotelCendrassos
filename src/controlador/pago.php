<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per comprovar que l'suari esta logat avans de fer el pagament.
***************************/

function ctrloginpago($peticio, $resposta, $imatges){
    include '../src/config.php';
    session_start();
    

    if( !isset($_SESSION["DNI"]) ){
        $resposta->SetTemplate("login.php");    
    }
      
    return $resposta;
}