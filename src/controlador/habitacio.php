<?php

function ctrlHabitacio($peticio, $resposta, $imatges){
    $resposta->SetTemplate("habitacions.php");
    return $resposta;
}