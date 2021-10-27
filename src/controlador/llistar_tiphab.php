<?php
function ctrlAdmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $tip_habs = new \Daw\llistartipushab($config["db"]);

    $tip_hab = $tip_habs->llistarhab();

    //print_r($reserves);

    $resposta->set("llistar_tiphab", $tip_hab);

    $resposta->SetTemplate("habitacions.php");

    return $resposta;
}
?>