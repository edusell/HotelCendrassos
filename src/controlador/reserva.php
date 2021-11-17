<?php

function ctrlreserva($peticio, $resposta, $contenidor)
{
    session_start();
    $dni = $_SESSION['DNI'];
    include '../src/config.php';
    
    $arribada=$_REQUEST['entrada'];
    $sortida=$_REQUEST['sortida'];
    $id=$_REQUEST['id'];
    $ocupants =$_REQUEST['ocupants'];
    $dias =$_REQUEST['dias'];

    
    $model = new \Daw\llistartipushab($config["db"]);

    $id_reserva = $model->reserva($dias,$arribada,$sortida,$id,$dni,$ocupants);
    

    $model = new \Daw\adminpdo($config["db"]);

    $info = $model->pdf($id_reserva[0]['id_reserva']);
    

    $resposta->set("in", $info);


    $resposta->SetTemplate("pdf.php");

    return $resposta;
}