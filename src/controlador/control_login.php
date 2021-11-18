<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per controlar el registre dels usuaris, si el registre es correcte guardem les dades de l'usuari a la session per no haber d'accedir aquestes per la base de dedes.
***************************/

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
        $redireccio_pagina_recerca=$_COOKIE["HTTP_REFERER"];

       
        //$resposta->setSession("logat", true);
       // $resposta->setSession("login", $actual);
       if($actual["id_departament_usuari"]==1){
        if(isset($_COOKIE["HTTP_REFERER"])){
            header("Location:".$redireccio_pagina_recerca);
           }else{
            $resposta->redirect("location: index.php?r=admin");
           }
           //$resposta->redirect($redireccio_pagina_recerca);
       }else{
           if(isset($_COOKIE["HTTP_REFERER"])){
            header("Location:".$redireccio_pagina_recerca);
           }else{
            $resposta->redirect("location: index.php");
           }
       }
    }else {
        //$resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}