<?php

function ctrLogin($peticio, $resposta, $contenidor)
{
    include '../src/config.php';

    $usuari = $_POST['usuari'];
    $pass = $_POST['contrasenya'];
    //$usuari = $peticio->get(INPUT_POST, "usuari");
    //$pass = $peticio->get(INPUT_POST, "contrasenya");

    
    $usuaris = new \Daw\llistartipushab($config["db"]);

   

    $actual = $usuaris->getUser($usuari);

       
       // print_r($actual);
       // die();
       
    if($actual["password"] === $pass) {

        session_start();
        $_SESSION['user']=$usuari;
        $_SESSION['pass']=$pass;
        $_SESSION['DNI']=$actual["DNI"];
        $_SESSION['nom']=$actual["Nom"];
        $_SESSION['rol']=$actual["id_departament_usuari"];
       
        //$resposta->setSession("logat", true);
       // $resposta->setSession("login", $actual);
       if($actual["id_departament_usuari"]==1){
        $resposta->redirect("location: index.php?r=admin");
       }else{
        $resposta->redirect("location: index.php");
       }
    }else {
        //$resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}