<?php
   include 'roladmin.php';
   ?> 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="admin.css"rel="stylesheet" type="text/css">
      <title>Admin</title>
   </head>
   <body>
      <?php include('menu.php') ?>
      <?php include('sidebar.php') ?>
      <div class='pagina'>
        <div class='estructura' style='padding-top: 70px; margin-left:20px; width:98%;'>
               <h3>RESERVES</h3>
               <form id="reserves" action="index.php" method="get" class='reserves' style='height: 300px'>
               <input type="hidden" name='r' value='borrreserva'>
                  <table id='taulareserves' style=' max-heigth: 600px;'>
                     <tr class='header'A>
                        <td></td>
                        <td>Nom</td>
                        <td>imatge</td>
                     </tr>
                     <?php
    $carpeta = "img/galeria/";
    if ($handler = opendir($carpeta)) {
        while (false !== ($file = readdir($handler))) {
            if($file == '.' || $file == '..'){} else {

                print "<tr>";
                print "<td><input type='checkbox' name='reserves[]' value='".$carpeta.$file."'></td>";
                print "<td>".$carpeta.$file."</td>";
                print "<td><img src='".$carpeta.$file."' width=150px></td>";
                print "<tr>";
        }
        }
        closedir($handler);
    }

                        ?>
                  </table>
               </form>
               <button type='submit' form='reserves'>Borrar</button>
               </form>
               <form id='addimage' action='index.php' method='POST'  enctype="multipart/form-data">
                  <input type="hidden" name=r value='afegirimatge'>
                  <input type="file" id="myFile" name="imatge" class='hidebut' required>
               </form>
               <button form='addimage' type='submit'>PENJA</button>
               <br><br>
                    </div>


      </div>
   </body>
   
</html>