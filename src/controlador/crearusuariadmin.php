<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per crear usuaris desde el panell administrador, aquests poden ser de cualsevol departament existent.
***************************/

function ctrlcrearusuariadmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $reserves = $model->getreserva();
    $tipus = $model->gettipus();
    $rols = $model->getrol();

    //print_r($reserves);
    $resposta->set("llistar_tipus", $tipus);
    $resposta->set("llistar_reserves", $reserves);
    $resposta->set("llistar_rols", $rols);

    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $cnom =$_POST['cognom'];
    $dni = $_POST['dni'];
    $tel = $_POST['telefon'];
    $usuari = $_POST['usuari'];
    $pass =$_POST['contrasenya'];
    $rol = $_POST['rol'];
    $origen = $_POST['orig'];

    if(!isset($rol)){
        $rol=0;
    }
    $err = $model->adduseradmin($mail,$nom,$cnom,$dni,$tel,$usuari,$pass,$rol);

    if(count($err)!=0){
        $resposta->set("erradduser",$err);
    }

    if(isset($_POST['orig'])){
        header('Location:index.php?r='.$origen);
    } else {
    $resposta->SetTemplate("admin.php");
    }

    return $resposta;
}