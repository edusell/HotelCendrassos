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
 
    <div class="popup-wrapper">

        <div class="popup col-12 justify-content-center">
                

            <div class="popup-close">x</div>
            <div class="popup-content ">
                <h3>Cambia contrasenya</h3>
                <form>
                  <label>Contrasenya actual<input type="text"></label>
                  <label>Contrasenya nova<input type="text" ></label>
                  <label>Repeteix la contrasenya nova<input type="text" ></label>
                  <button>Cambia</button>
                </form>
            </div>
        </div>
    </div>
      <h1>General<h1>
      <?php 
    
        
      //$dni = $_SESSION['Nom'];
      //print_r($dni);
      //die();
        //print_r($llistar_dades);
        //die();
      print '<div class="row panelldades">';
        print"<div class='col-4 ' id='dadespersonals'><p>Nom: <input type='text' value=".$llistar_dades['Nom']." readonly='readonly' class='col-4'></p></div>";
        print"<div class='col-4' id='dadespersonals'><p>Cognoms: <input type='text' value='".$llistar_dades['Cognom']."'readonly='readonly' class='col-6'></p></div>";
        print"<div class='col-4' id='dadespersonals'><p>DNI: <input type='text'value='".$llistar_dades['DNI']."' readonly='readonly' class='col-4'></p></div>";
      print'</div>';
      print '<div class="row panelldades">';
        print"<div class='col-4' id='dadespersonals'><p>Correu: <input type='text'value='".$llistar_dades['correu']."' class='col-9'></p></div>";
       print' <div class="col-4" id="dadespersonals"><p>Adreça: <input type="text" class="col-9"></p></div>';
        print"<div class='col-4' id='dadespersonals'><p>Telefon: <input type='number' value='".$llistar_dades['tel']."'readonly='readonly' class='col-5'></p></div>";
      print'</div>';
      print'<div class="row panelldades">';
        print'<div class="col-6" id="dadespersonals"><p>Poblacio: <input type="text" readonly="readonly" ></p></div>';
        print'<div></div>';
        print'<button class="col-2 boto_modifica" >Modifica</button>';
        print'<button class="col-2 boto_modifica" id="contrasenya">Canvia contrasenya</button>';
      print'</div>';
    print'</div>'; 
    ?>
    <div class="col-12 "id="configuracions">
    <h1>Reserves<h1>
      <table class="col-12 " id="panell">
      <tr>
        <th>Id</th>
        <th>Ocupants</th>
        <th>Arribada</th>
        <th>Sortida</th>
        <th>DNI</th>
      </tr>
        <?php

        foreach($llistar_panell_reserva as $row){
          
          print "<tr>";
          print "<td>".$row['id_reserva']."</td>";
          print "<td>".$row['num_ocupants']."</td>";
          print "<td>".$row['data_arribada']."</td>";
          print "<td>".$row['data_sortida']."</td>";
          print "<td>".$row['DNI']."</td>";
          print "<tr>";
        } 

        ?>
      </table>

    </div>
</div>
<?php include 'footerprim.php';?>
</body>
<script>
  const button = document.getElementById('contrasenya');
const popup = document.querySelector('.popup-wrapper');
const close = document.querySelector('.popup-close');
 
button.addEventListener('click', () => {
    popup.style.display = 'block';
});
close.addEventListener('click', () => {
    popup.style.display = 'none';
});

popup.addEventListener('click', e => {
    // console.log(e);
    if(e.target.className === 'popup-wrapper') {
        popup.style.display = 'none';
    }
});


</script>
</html>