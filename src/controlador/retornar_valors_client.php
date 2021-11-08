<?php

function ctrlmodificadades($peticio, $resposta, $imatges){
    include '../src/config.php';
    $cambi_dades = new \Daw\llistartipushab($config["db"]);
    session_start();
    $DNI=$_SESSION['DNI'];
    $correu=$_REQUEST['correu'];
    $telefon=$_REQUEST['telefon'];

     if(!checkdnsrr(array_pop(explode("@",$correu)),"MX")){
        $err['mail']=1;
        $err[$i]='El Correu electronic es incorrecte 1';
        print("Error email");
        die();
    }
    if(strlen($telefon)!=9){
        $err[$i]='El telefon es incorrecte';
        $i++;
        print("Error telefon");
        die();
    }
    

   


    $cambi_dades->cambiadades($DNI,$correu,$telefon);
    $resposta->redirect("Location:index.php?r=usuari");
   
    return $resposta;
}