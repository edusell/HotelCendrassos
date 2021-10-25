<?php

function ctrlAdmincalendari($peticio, $resposta, $imatges){

    $resposta->SetTemplate("admin_calendari.php");
    return $resposta;
}