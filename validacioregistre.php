<?php

include 'database.php';

if(isset($_GET['nom'],$_GET['cognom'],$_GET['usuari'],$_GET['correu'],$_GET['tel'],$_GET['password'])){
    echo('Location:singup.php');
    //header('Location:singup.php');
}
echo('hola');

?>