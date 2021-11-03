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
         <table class='panell'>
            <tr class='estructura'>
               <td colspan=2>
                  <h3>HABITACIONS</h3>
                  <div id='habitacions' class='reserves'>
                     <table id='taulareserves'>
                        <tr class='header'A>
                           <td></td>
                           <td>id habitacio</td>
                           <td>m<sup>2</sup></td>
                           <td>preu</td>
                           <td>nom Tipus</td>
                           <td>serveis</td>
                        </tr>
                        <form id="bhabitacions" action="index.php" method="post">
                     <input type="hidden" name='r' value='borrarhabitacio'>
                        <?php
                           foreach($llistar_habitacions as $row){
                           
                              print "<tr>";
                              print "<td><input type='checkbox' name='ids[]' value='".$row['id_habitacio']."'></td>";
                              print "<td>".$row['id_habitacio']."</td>";
                              print "<td>".$row['m_tipus']."</td>";
                              print "<td>".$row['preu']."</td>";
                              print "<td>".$row['nom_tipus']."</td>";
                              print "<td>".$row['serveis_tipus']."</td>";
                              print "<tr>";
                           }
                           
                           ?>
                           </form>
                  <form id='crearhabitacio' action="index.php" method='post'>
                  <input type="hidden" name='r' value='crearhabitacio'>
                  <tr id='hide1'>
                  <td colspan=2></td>
                  <td></td>
                  <td></td>
                  <td><select name="tipus" id="rol">
                  <?php
                     foreach($llistar_tipus as $row){
                      print '<option value="'.$row['id_tipus'].'">'.$row['nom_tipus'].'</option>';
                      }
                      
                      ?></td>
                  <td></td>
                  </tr>
                  </form>
                  </table>
                    </div>
                  <button type='submit' form='bhabitacions'>Borrar</button>
                  <button id='creartipus1' onclick='crearhabitacio()'>Crear</button>
                  <button form='crearhabitacio' id='hidebut1'>envia</button>
               </td>
            </tr>
            <tr class='estructura'>
               <td colspan=2>
                  <h3>TIPUS HABITACIONS</h3>
                  <div id='habitacions' class='reserves'>
                     <table id='taulahabitacions'>
                        <tr class='header'>
                           <td>
                           <td>id</td>
                           <td>m<sup>2</sup></td>
                           <td>ocupants max</td>
                           <td>preu</td>
                           <td>tipus</td>
                           <td>descripcio</td>
                        </tr>
                        <form id='borrartipus' action='index.php' method='post'>
                           <input type="hidden" name='r' value='borrartipus'>
                           <input type="hidden" name='origen' value='adminhabitacio'>
                           <?php
                              foreach($llistar_tipus as $row){
                                 print "<tr>";
                                 print "<td><input type='checkbox' name='tipus[]' value='".$row['id_tipus']."'></td>";
                                 print "<td>".$row['id_tipus']."</td>";
                                 print "<td>".$row['m_tipus']."</td>";
                                 print "<td>".$row['ocupants_tipus']."</td>";
                                 print "<td>".$row['preu']."</td>";
                                 print "<td>".$row['nom_tipus']."</td>";
                                 print "<td id='desc'>".$row['desc_tipus']."</td>";
                                 print "<tr>";
                              }
                              
                              ?>
                        </form>
                        <form id='creartipushabitacio' action="index.php" method='post'>
                           <input type="hidden" name='r' value='creartipus'>
                           <input type="hidden" name='origen' value='adminhabitacio'>
                           <tr id='hide'>
                              <td colspan=2></td>
                              <td><input class='addnum' type='number' name='m'></td>
                              <td><input class='addnum' type='number' name='omax'></input></td>
                              <td><input class='addnum' type='number' name='preu'></td>
                              <td><input class='addtxt' type='text' name='nom'></td>
                              <td><input class='addtxt' type='text' name='descripcio'></td>
                           </tr>
                        </form>
                     </table>
                  </div>
                  <button type='submit' form='borrartipus'>Borrar</button>
                  <button id='creartipus' onclick='creartipus()'>Crear</button>
                  <button form='creartipushabitacio' id='hidebut'>envia</button>
               </td>
            </tr>
         </table>
      </div>
   </body>
   <script>
      document.getElementById('hide1').style.visibility = "hidden";
      document.getElementById('hidebut1').style.visibility = "hidden";
      document.getElementById('creartipus1').style.visibility = "visible";
      document.getElementById('hide').style.visibility = "hidden";
      document.getElementById('hidebut').style.visibility = "hidden";
      document.getElementById('creartipus').style.visibility = "visible";
      
       function crearhabitacio(){
         document.getElementById('hide1').style.visibility = "visible";
         document.getElementById('hidebut1').style.visibility = "visible";
         document.getElementById('creartipus1').style.visibility = "hidden";
       }
      
       function creartipus(){
         document.getElementById('hide').style.visibility = "visible";
         document.getElementById('hidebut').style.visibility = "visible";
         document.getElementById('creartipus').style.visibility = "hidden";
       }
      
   </script>
</html>