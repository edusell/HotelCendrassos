<?php

function ctrlAdmin($peticio, $resposta, $imatges){

    $resposta->SetTemplate("admin.php");

    return $resposta;
}