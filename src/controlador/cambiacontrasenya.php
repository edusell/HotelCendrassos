<?php

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per realitzar el canvi de contrasenya.
***************************/

function ctrlcambiacontrasenya($peticio, $resposta, $imatges){
    include '../src/config.php';
    $cambi_contra = new \Daw\llistartipushab($config["db"]);
    session_start();
    $pass_actual=$_SESSION['pass'];
    $DNI=$_SESSION['DNI'];
  
   $nova=$_REQUEST['contrasenya_nova'];
   
   $nova1=$_REQUEST['contrasenya_nova1'];
  
   $actual_introduit=$_REQUEST['contrasenya_actual'];
   
   if($pass_actual===$actual_introduit&&$nova===$nova1){
    $cambi_contra->cambiacontrasenya($DNI ,$nova);
    $resposta->redirect("Location:index.php?r=usuari");
   }
    return $resposta;
}