<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="css_panell_usuari.css"rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css.css"rel="stylesheet" type="text/css">
  <link href="mcss.css"rel="stylesheet" type="text/css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <title>Usuari</title>
</head>
<body>
<?php include('menu.php'); ?><br>

<div class="container col-12 dades">
 
    <div id='popup'>
      <div class="popup col-12 justify-content-center">
        <div class="popup-close">x</div>
          <div class="popup-content ">
                <h3>Cambia contrasenya</h3>
                <form action="index.php?r=cambiacontrasenya"  method="post">
                  <label>Contrasenya actual<input  type="password" name="contrasenya_actual"></label>
                  <label>Contrasenya nova<input type="password" name="contrasenya_nova"></label>
                  <label>Repeteix la contrasenya nova<input  type="password" name="contrasenya_nova1"></label>
                  <button>Cambia</button>
                </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 descktop"id="configuracions">
      <h1>General</h1>
        <form id='form1' action="index.php?r=modificadades" method="post">
      <?php 
     
      print '<div class="row panelldades">';
        print"<div class='col-4 ' id='dadespersonals'><p>Nom: <input type='text' value=".$llistar_dades['Nom']." readonly='readonly' class='col-4'></p></div>";
        print"<div class='col-4' id='dadespersonals'><p>Cognoms: <input type='text' value='".$llistar_dades['Cognom']."'readonly='readonly' class='col-6'></p></div>";
        print"<div class='col-4' id='dadespersonals'><p>DNI: <input type='text'value='".$llistar_dades['DNI']."' readonly='readonly' class='col-4'></p></div>";
      print'</div>';
      print '<div class="row panelldades">';
        print"<div class='col-4' id='dadespersonals'><p>Correu: <input type='text' name='correu' value='".$llistar_dades['correu']."' class='col-9'></p></div>";
       print' <div class="col-4" id="dadespersonals"><p>Adreça: <input type="text" name="adreça" class="col-9"></p></div>';
        print"<div class='col-4' id='dadespersonals'><p>Telefon: <input type='text' name='telefon' value='".$llistar_dades['tel']."' class='col-5'></p></div>";
      print'</div>';
      print'<div class="row panelldades">';
        print'<div class="col-6" id="dadespersonals"><p>Poblacio: <input type="text" readonly="readonly" ></p></div>';
      print'</div>';

    ?>
      </form>
      <input type="submit" form='form1' class="col-2 boto_modifica boto_contrasenya" >
      <button class="col-2 boto_contrasenya" id="contrasenya" onclick="canvicontrasenya()">Canvia contrasenya</button>
    <h1>Reserves</h1>
      <table class="table table-striped table-dark">
          <thead>
          <tr>
          <th scope="col">Id</th>
          <th scope="col">Ocupants</th>
          <th scope="col">Arribada</th>
          <th scope="col">Sortida</th>
          <th scope="col">DNI</th>
          </tr>
        <?php

        foreach($llistar_panell_reserva as $row){
          print'</thead>';
          print'<tbody>';
          print'<tr>';
          print"<th scope='row'>".$row['id_reserva']."</th>";
          print"<td>".$row['num_ocupants']."</td>";
          print"<td>".$row['data_arribada']."</td>";
          print"<td>".$row['data_sortida']."</td>";
          print"<td>".$row['DNI']."</td>";
          print"</tr>";
        } 

        ?>
          </tbody>
          </table>

    </div>

    <div class= 'mobile infousuari'>
    <h1>General</h1>
        <form action="index.php?r=modificadades" method="post">
      <?php 
     
        print"<div id='dadespersonals'><p>Nom: <input type='text' value=".$llistar_dades['Nom']." readonly='readonly' class='col-4'></p></div>";
        print"<div  id='dadespersonals'><p>Cognoms: <input type='text' value='".$llistar_dades['Cognom']."'readonly='readonly' class='col-6'></p></div>";
        print"<div  id='dadespersonals'><p>DNI: <input type='text'value='".$llistar_dades['DNI']."' readonly='readonly' class='col-4'></p></div>";

        print"<div id='dadespersonals'><p>Correu: <input type='text' name='correu' value='".$llistar_dades['correu']."' class='col-9'></p></div>";
       print' <div id="dadespersonals"><p>Adreça: <input type="text" name="adreça" class="col-9"></p></div>';
        print"<div id='dadespersonals'><p>Telefon: <input type='text' name='telefon' value='".$llistar_dades['tel']."' class='col-5'></p></div>";

        print'<div  id="dadespersonals"><p>Poblacio: <input type="text" readonly="readonly" ></p></div>';
        print'<button type="submit">Modifica</button>';
    ?>
      </form>
      <button id="contrasenya" onclick="canvicontrasenya()">Canvia contrasenya</button>
        <br><br><br><br>
      <h1>Reserves</h1>
      <table class="table table-striped table-dark">
          <thead>
          <tr>
          <th scope="col">Id</th>
          <th scope="col">Ocupants</th>
          <th scope="col">Arribada</th>
          <th scope="col">Sortida</th>
          <th scope="col">DNI</th>
          </tr>
        <?php

        foreach($llistar_panell_reserva as $row){
          print'</thead>';
          print'<tbody>';
          print'<tr>';
          print"<th scope='row'>".$row['id_reserva']."</th>";
          print"<td>".$row['num_ocupants']."</td>";
          print"<td>".$row['data_arribada']."</td>";
          print"<td>".$row['data_sortida']."</td>";
          print"<td>".$row['DNI']."</td>";
          print"</tr>";
        } 

        ?>
          </tbody>
          </table>

    </div>

</div>
<?php include 'footerprim.php';?>
</body>
<script>


  function canvicontrasenya(){
    var element = document.getElementById("popup");;
   element.classList.toggle("popup-contra");
  }


//const button_contrasenya = document.getElementById('contrasenya');
const popup = $("")
const close = document.querySelector('.popup-close');


close.addEventListener('click', () => {
  var element = document.getElementById("popup");;
   element.classList.toggle("popup-contra");
});


popup.addEventListener('click', e => {
    // console.log(e);
    if(e.target.className === 'popup-wrapper') {
        popup.style.display = 'none';
    }
});

</script>
</html>