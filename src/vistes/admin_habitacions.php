<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="admin.css"rel="stylesheet" type="text/css">
      <title>Admin</title>
   </head>
   <style>
      .reserves{
         text-align:left;
      }
      #desc{
         width:100%;
      }
   </style>
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
                        <input type='hidden' name='e' value='habitacio'>
                        <input type='hidden' name='o' value='adminhabitacio'>
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
                           <input id='formtipus' type="hidden" name='r' value='borrartipus'>
                           <input type="hidden" name='origen' value='adminhabitacio'>
                           <input type='hidden' name='e' value='tipus'>
                          <input type='hidden' name='o' value='adminhabitacio'>

                           <?php
                           $i=0;
                              foreach($llistar_tipus as $row){
                                 print "<tr>";
                                 print "<td><input id='i".$i."' type='checkbox' name='tipus[]' value='".$row['id_tipus']."' class='Checked'></td>";
                                 print "<td>".$row['id_tipus']."</td>";
                                 print "<td><input class='i".$i."' type='number' name='m[]' value='".$row['m_tipus']."' disabled></td>";
                                 print "<td><input class='i".$i."' type='number' name='ocup[]' value='".$row['ocupants_tipus']."' disabled></td>";
                                 print "<td><input class='i".$i."' type='number' name='preu[]' value='".$row['preu']."' disabled></td>";
                                 print "<td><input class='i".$i."' type='text' name='nom[]' value='".$row['nom_tipus']."' disabled></td>";
                                 print "<td id='desc'><input id='desc' class='i".$i."' type='text' name='desc[]' value='".$row['desc_tipus']."' disabled></td>";
                                 print "<tr>";
                                 $i++;
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
                  <button onclick='editatipus()' form='borrartipus'>Edita</button>
                  <button type='submit' form='borrartipus'>Borrar</button>
                  <button id='creartipus' onclick='creartipus()'>Crear</button>
                  <button form='creartipushabitacio' id='hidebut'>envia</button>
               </td>
            </tr>
         </table>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      document.getElementById('hide1').style.visibility = "hidden";
      document.getElementById('hidebut1').style.visibility = "hidden";
      document.getElementById('creartipus1').style.visibility = "visible";
      document.getElementById('hide').style.visibility = "hidden";
      document.getElementById('hidebut').style.visibility = "hidden";
      document.getElementById('creartipus').style.visibility = "visible";

      function editatipus(){
        $("#formtipus").val("edita");
      }
      function editausuari(){
        $("#formuser").val("edita");
      }

      $checkbox = $('.Checked');
      $checkbox.click(checkArray);

      function checkArray(){
         var chkArray = [];
         chkArray = $.map($checkbox, function(el){
         if(el.checked) { 
            $("."+el.id).prop('disabled', false);
            return el.id }
         else{ 
            $("."+el.id).prop('disabled', true);
            return el.id };
         });
      }
      
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