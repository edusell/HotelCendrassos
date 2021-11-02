<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controlador/inici.php";
include "../src/controlador/admin.php";
include "../src/controlador/habitacio.php";
include "../src/controlador/panell_usuaris.php";
include "../src/controlador/panell_reservas.php";
include "../src/controlador/panell_calendari.php";
include "../src/controlador/panell_habitacio.php";
include "../src/controlador/Galeria.php";
include "../src/controlador/login.php";
include "../src/controlador/recerca.php";
include "../src/controlador/borrarreserva.php";
include "../src/controlador/borrartipus.php";
include "../src/controlador/creartipus.php";
include "../src/controlador/crearusuariadmin.php";
include "../src/controlador/control_login.php";
include "../src/controlador/panellusuari.php";
include "../src/controlador/rmuser.php";
include "../src/controlador/adddept.php";


$r="";
$r = $_REQUEST["r"];

/* Creem els diferents models */
$resposta = new Daw\Resposta();
//$peticio = new Daw\Peticio();
//$imatges = new Daw\ImatgesSQLite($config["sqlite"]);
//$imatges = new Daw\ImatgesPDO($config["db"]);
//echo ($r);

if ($r == "") {
    $resposta = ctrlPortada($peticio, $resposta, $imatges);
} else if($r == "admin"){
    $resposta = ctrlAdmin($peticio, $resposta, $imatges);
} else if($r == "habitacions"){
    $resposta = ctrlHabitacio($peticio, $resposta, $imatges);
}else if($r == "adminusuari"){
    $resposta = ctrlAdminusuari($peticio, $resposta, $imatges);
}else if($r == "adminreserva"){
    $resposta = ctrlAdminreserva($peticio, $resposta, $imatges);
}else if($r == "admincalendari"){
    $resposta = ctrlAdmincalendari($peticio, $resposta, $imatges);
}else if($r == "adminhabitacio"){
    $resposta = ctrlAdminhabitacio($peticio, $resposta, $imatges);
}else if($r == "galeria"){
    $resposta = ctrlGaleria($peticio, $resposta, $imatges);
}else if($r == "login"){
    $resposta = ctrlLogin($peticio, $resposta, $imatges);
} else if($r == "recerca"){
    $resposta = ctrlRecerca($peticio, $resposta, $imatges);
}  else if($r == "borrreserva"){
    $resposta = ctrlborrreserva($peticio, $resposta, $imatges);
} else if($r == "borrartipus"){
    $resposta = ctrlborrtipus($peticio, $resposta, $imatges);
}  else if($r == "creartipus"){
    $resposta = ctrlcreartipus($peticio, $resposta, $imatges);
} else if($r == "crearusuariadmin"){
    $resposta = ctrlcrearusuariadmin($peticio, $resposta, $imatges);
}else if($r == "dologin"){
    $resposta = ctrLogin($peticio, $resposta, $imatges);
}else if($r == "usuari"){
    $resposta = ctrPanellusuari($peticio, $resposta, $imatges);
<<<<<<< HEAD
    
=======
}else if($r == "rmuser"){
    $resposta = ctrrmuser($peticio, $resposta, $imatges);
} else if($r == "creardept"){
    $resposta = ctradddept($peticio, $resposta, $imatges);
>>>>>>> b01e5db0115bc18ea425a8879f6802d9a0014c8f
}

$resposta->resposta();