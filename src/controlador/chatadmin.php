<?php 

function ctrlchat($peticio, $resposta, $imatges){
    include '../src/config.php';

    $resposta->SetTemplate("chatadmin.php");

    return $resposta; 
} 