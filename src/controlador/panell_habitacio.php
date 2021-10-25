<?php

function ctrlAdminhabitacio($peticio, $resposta, $imatges){

    $resposta->SetTemplate("admin_habitacions.php");
    return $resposta;
}