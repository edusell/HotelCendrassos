<?php

function ctrlUsuari($peticio, $resposta, $imatges){

    $resposta->SetTemplate("admin_usuaris.php");


    return $resposta;
}