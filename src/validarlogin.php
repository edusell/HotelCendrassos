<?php
include 'database.php';

if(!isset($_POST['usuari'],$_POST['contrasenya'])){
    echo('Location:login.html');
    header('Location:login.html');
}

$sql= "SELECT rol FROM usuari WHERE username='".$_POST['usuari']."' AND password='".$_POST['contrasenya']."' LIMIT 1;";

$rol = $conn->query($sql)

    while($row = $rol->fetch_assoc()) {
        if($row['rol']==0){
            header('Location:pagina_principal.php');
        } else{
            header('Location:admin.php');
        }
        
    }




