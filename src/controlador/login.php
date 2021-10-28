<?php

function ctrlLogin($peticio, $resposta, $imatges){
    
    $resposta->SetTemplate("login.php");


    return $resposta;
}