<?php

function ctrltancasesio($peticio, $resposta, $imatges){
    session_start();
    session_destroy();
    $resposta->SetTemplate("login.php");
    return $resposta;
}