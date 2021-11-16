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
include "../src/controlador/borrardept.php";
include "../src/controlador/tancasesio.php";
include "../src/controlador/borrarhabitacio.php";
include "../src/controlador/crearhabitacio.php";
include "../src/controlador/cambiacontrasenya.php";
include "../src/controlador/retornar_valors_client.php";
//include "../src/controlador/retornar_valors_client.php";
include "../src/controlador/resumreserva.php";
include "../src/controlador/borrfoto.php";
include "../src/controlador/festa.php";
include "../src/controlador/registre.php";
include "../src/controlador/galeriaadmin.php";
include "../src/controlador/pdf.php";
include "../src/controlador/afegirimatge.php";
include "../src/controlador/chatadmin.php";
include "../src/controlador/edita.php";
include "../src/controlador/contacte.php";
include "../src/controlador/reserva.php";

include "../src/middleware/middleware.php";



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
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdmin");
} else if($r == "habitacions"){
    $resposta = ctrlHabitacio($peticio, $resposta, $imatges);
}else if($r == "adminusuari"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdminusuari");
}else if($r == "adminreserva"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdminreserva");
}else if($r == "admincalendari"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdmincalendari");
}else if($r == "adminhabitacio"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdminhabitacio");
}else if($r == "galeria"){
    $resposta = ctrlGaleria($peticio, $resposta, $imatges);
}else if($r == "login"){
    $resposta = ctrlLogin($peticio, $resposta, $imatges);
} else if($r == "recerca"){
    $resposta = ctrlRecerca($peticio, $resposta, $imatges);
}  else if($r == "borrreserva"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlborrreserva");
} else if($r == "borrartipus"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlborrtipus");
}  else if($r == "creartipus"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlcreartipus");
} else if($r == "crearusuariadmin"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlcrearusuariadmin");
}else if($r == "dologin"){
    $resposta = ctrLogin($peticio, $resposta, $imatges);
}else if($r == "usuari"){
    $resposta = ctrPanellusuari($peticio, $resposta, $imatges);
}else if($r == "rmuser"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrrmuser");
} else if($r == "creardept"){ 
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctradddept");
}else if($r == "borrardept"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrldropdept");
}else if($r == "tanca_sesio"){
    $resposta = ctrltancasesio($peticio, $resposta, $imatges);
}else if($r == "borrarhabitacio"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrldrophabitacio");
}else if($r == "crearhabitacio"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrladdhabitacio");
}else if($r == "cambiacontrasenya"){
    $resposta = ctrlcambiacontrasenya($peticio, $resposta, $imatges);
}else if($r == "modificadades"){
    $resposta = ctrlmodificadades($peticio, $resposta, $imatges);
}else if($r == "festa"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlfesta");
}else if($r == "registre"){
    $resposta = ctrlregistre($peticio, $resposta, $imatges);
}else if($r == "dadesreserva"){
    $resposta = ctrlresumreserva($peticio, $resposta, $imatges);
}else if($r == "galeriaadmin"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlgaleriaadmin");
}else if($r == "pdf"){
    $resposta = ctrlpdf($peticio, $resposta, $imatges);
} else if($r == "afegirimatge"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrladdimage");
} else if($r == "borrfoto"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrldelimage");
}  else if($r == "chatadmin"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlchat");
} else if($r == "edita"){
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "edita");
} else if($r == "contacte"){
    $resposta = ctrlcontacte($peticio, $resposta, $imatges);
} else if($r == "validacio_pagament"){
    $resposta = ctrlreserva($peticio, $resposta, $imatges);
} 



$resposta->resposta();
