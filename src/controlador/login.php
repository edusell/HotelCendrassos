<?php

function ctrlLogin($peticio, $resposta, $imatges){

    $resposta->SetTemplate("Login.php");


    return $resposta;
}