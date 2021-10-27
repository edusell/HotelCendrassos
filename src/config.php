<?php
$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'root';
$config["db"]["pass"] = '';
$config["db"]["dbname"] = 'hotelcenderassos';
$config["db"]["host"] = 'localhost';



//require_once "../src/models/peticio.php";
require_once "../src/models/resposta.php";
require_once "../src/models/admin.php";