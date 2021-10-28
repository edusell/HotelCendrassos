<?php

function ctrlborrtipus($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $ids = $_GET['tipus'];
    print_r($ids);
    
    
    $reserva->droptipus($ids);

    header ('Location: index.php?r=admin');

    return $resposta;
}