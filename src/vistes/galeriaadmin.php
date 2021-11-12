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
      <div class='pagina' style='padding-top: 70px;'>
        <div class='estructura' style='margin-left:20px; width:98%;'>
               <h3>RESERVES</h3>
               <form id="galeria" action="index.php" method="get" class='reserves' style='height: 60vh'>
               <input type="hidden" name='r' value='borrfoto'>
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
                print "<td><input type='checkbox' name='fotos[]' value='".$carpeta.$file."'></td>";
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
               <button type='submit' form='galeria'>Borrar</button>
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