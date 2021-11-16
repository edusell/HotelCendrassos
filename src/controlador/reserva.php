<?php

function ctrlreserva($peticio, $resposta, $contenidor)
{
    session_start();
    $dni = $_SESSION['DNI'];
    include '../src/config.php';
    
    $arribada=$_REQUEST['entrada'];
    $sortida=$_REQUEST['sortida'];
    $id=$_REQUEST['id'];
    
    $model = new \Daw\llistartipushab($config["db"]);

    $model->reserva($arribada,$sortida,$id,$dni);

   

    return $resposta;
}