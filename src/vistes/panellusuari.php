<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="css_panell_usuari.css"rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css.css"rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Usuari</title>
</head>
<body>
<?php include('menu.php'); ?><br>
<div class="container">
  <div class="row align-items-start justify-content-center col-12">
    <div class="col-12 "id="configuracions">
      <h1>General<h1>
      <?php 
      

      //$dni = $_SESSION['Nom'];
      //print_r($dni);
      //die();
        //print_r($llistar_dades);
        //die();
      print '<div class="row panelldades">';
        print"<div class='col-4 ' id='dadespersonals'><p>Nom: <input type='text' value=".$llistar_dades['Nom']." readonly='readonly' class='col-4'></p></div>";
        print'<div class="col-4" id="dadespersonals"><p>Cognoms: <input type="text" readonly="readonly" class="col-6"></p></div>';
        print'<div class="col-4" id="dadespersonals"><p>DNI: <input type="text" readonly="readonly" class="col-4"></p></div>';
      print'</div>';
      print '<div class="row panelldades">';
        print'<div class="col-4 " id="dadespersonals"><p>Correu: <input type="text" class="col-9"></p></div>';
       print' <div class="col-4" id="dadespersonals"><p>Adreça: <input type="text" class="col-9"></p></div>';
        print'<div class="col-4" id="dadespersonals"><p>Data neixament: <input type="date" readonly="readonly" class="col-5"></p></div>';
      print'</div>';
      print'<div class="row panelldades">';
        print'<div class="col-2" id="dadespersonals"><p>Edat: <input type="number" readonly="readonly" class="col-2"></p></div>';
        print'<div class="col-6" id="dadespersonals"><p>Poblacio: <input type="text" readonly="readonly" ></p></div>';
        print'<div></div>';
        print'<button class="col-2 boto_modifica">Modifica</button>';
      print'</div>';
    print'</div>';
      
    ?>
    <div class="col-12 "id="configuracions">
    <h1>Reserves<h1>

    </div>
</div>
<?php include 'footerprim.php';?>
</body>
</html>