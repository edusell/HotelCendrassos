<?php

function ctrlLogin($peticio, $resposta, $imatges){
    
    $expiryTime = time()+(300); 
    setcookie('HTTP_REFERER',$_SERVER['HTTP_REFERER'],$expiryTime,'/');

    $resposta->SetTemplate("login.php");


    return $resposta;
}