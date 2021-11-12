<?php

function ctrloginpago($peticio, $resposta, $imatges){
    include '../src/config.php';
    session_start();
    

    if( !isset($_SESSION["DNI"]) ){
        $resposta->SetTemplate("login.php");    
    }
      
    return $resposta;
}