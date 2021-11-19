<?php 


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per realitzar canvis en les difenets dades del panell d'administracio, es poden cambiar dedes dels usuaris,departaments i tipus d'habitacions. Per seguretat no es poden cambiar dades de les reserves ni de les habitacions.
***************************/

function edita($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $e= $_REQUEST['e'];
    $o= $_REQUEST['o'];


    if($e == 'usuari'){
        $dni = $_REQUEST["usuaris"];
        $nom = $_REQUEST["nom"];
        $cognom = $_REQUEST["cognom"];
        $tel = $_REQUEST["tel"];
        $correu = $_REQUEST["correu"];

        for($i=0;$i<count($dni);$i++){
            $model->editausuari($dni[$i],$nom[$i],$cognom[$i],$tel[$i],$correu[$i]);
        }

    } else if($e == 'dept'){
        $id=$_REQUEST['ids'];
        $nom=$_REQUEST['nom'];
        $desc = $_REQUEST['desc'];

        for($i=0;$i<count($id);$i++){
            $model->editdept($id[$i],$nom[$i],$desc[$i]);
        }

    } else if($e=='tipus'){
        $id = $_REQUEST['tipus'];
        $m = $_REQUEST['m'];
        $ocup = $_REQUEST['ocup'];
        $preu = $_REQUEST['preu'];
        $nom = $_REQUEST['nom'];
        $desc = $_REQUEST['desc'];
        for($i=0;$i<count($id);$i++){
            $model->edittipus($id[$i],$m[$i],$ocup[$i],$preu[$i],$nom[$i],$desc[$i]);
        }

    }

    header("Location:index.php?r=".$o);


    $resposta->SetTemplate("admin.php");

    return $resposta; 
}