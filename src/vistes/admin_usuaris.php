<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="admin.css"rel="stylesheet" type="text/css">
      <title>Admin</title>
      <style>
         #hide input{
         width:80%;
         }
         #hide select{
         width:80%;
         }
      </style>
   </head>
   <body>
      <?php include('menu.php') ?>
      <?php include('sidebar.php') ?>
      <div class='pagina'>
         <table class='panell'>
            <tr class='estructura'>
               <td colspan=2 class=border>
                  <h3>USUARIS</h3>
                  <div id='habitacions' class='reserves'>                 
                     <table style='overflow-y: scroll;' id='taulareserves'>
                     <form id="rmusuari" action="index.php" method="post" class='reserves'>
                     <input id='formuser' type='hidden' name='r' value='rmuser'>
                     <input type='hidden' name='e' value='usuari'>
                     <input type='hidden' name='o' value='adminusuari'>
                     

                        <tr class='header'A>
                           <td></td>
                           <td>DNI</td>
                           <td>Nom</td>
                           <td>Cognom</td>
                           <td>Telefon</td>
                           <td>Correu</td>
                           <td>rol</td>
                           <td>username</td>
                           <td>contrasenya</td>
                        </tr>
                        <?php
                        $i=1;
                           foreach($llistar_usuaris as $row){
                               print "<tr>";
                               print "<td><input id='i".$i."' type='checkbox' name='usuaris[]' value='".$row['DNI']."' class='Checked'></td>";
                               print "<td>".$row['DNI']."</td>";
                               print "<td><input class='i".$i."' type='text' name='nom[]' value='".$row['Nom']."' disabled></td>";
                               print "<td><input class='i".$i."' type='text' name='cognom[]' value='".$row['Cognom']."' disabled></td>";
                               print "<td><input class='i".$i."' type='number' maxlength='9' minlength='9' name='tel[]' value='".$row['tel']."' disabled></td>";
                               print "<td><input class='i".$i."' type='text' name='correu[]' value='".$row['correu']."' disabled></td>";
                               print "<td>".$row['nom_departament']."</td>";
                               print "<td>".$row['username']."</td>";
                               print "<td>**********</td>";
                               print "<tr>";
                               $i++;
                           }
                           
                           ?>

                  </form>
                  <!--FROMULARI INTRODUIR USUARI -->
                  <form id='registre' action="index.php" method='post' novalidate>
                  <input type='hidden' name='r' value='crearusuariadmin'>
                  <input type='hidden' name='orig' value='adminusuari'>
                  <tr id='hide'>
                  <td></td>
                  <td>
                  <input type="text" id="dni" name="dni" required minlength="9" maxlength="9">
                  </td>
                  <td>
                  <input type="text" id="nom" name="nom" required minlength="1">
                  </td>
                  <td>
                  <input type="text" id="cognom" name="cognom" required>
                  </td>
                  <td>
                  <input type="tel" id="telefon" name="telefon" required minlength="9" maxlength="9">
                  </td>
                  <td>
                  <input type="email" id="mail" name="mail" required minlength="8">
                  </td>
                  <td>
                  <select name="rol" id="rol">
                  <?php
                     foreach($llistar_rols as $row){
                     print '<option value="'.$row['id_departament'].'">'.$row['nom_departament'].'</option>';
                     }
                     
                     ?>
                  </select>
                  </td>
                  <td>
                  <input type="text" id="usuari" name="usuari" required minlength="8">
                  </td>
                  <td>
                  <input type="password" id="contrasenya" name="contrasenya" required minlength="8">
                  </td>
                  </tr>
                  </form>
                  </table>
                    </div>
                    <button onclick='editausuari()' form='rmusuari'>Edita</button>
                  <button form='rmusuari' type='submit'>Borrar</button>
                  <button id='crearusuariinput' onclick='crearusuari()'>Crear</button>
                  <button onclick="validar()" id='hidebut'>Enviar</button>
                  <br><br>
               </td>
            </tr>
            <tr class='estructura '>
               <td class=border>
                  <h3>DEPARTAMENT</h3>
                  <div id='habitacions' class='reserves'>
                     <table id='taulahabitacions'>
                        <tr class='header'>
                           <td></td>
                           <td>id</td>
                           <td>nom</td>
                           <td>descripcio</td>
                        </tr>
                        <form id='borrardept' action='index.php' method='post'>
                          <input id='formdept' type="hidden" name='r' value='borrardept' >
                          <input type='hidden' name='e' value='dept'>
                          <input type='hidden' name='o' value='adminusuari'>

                           <?php
                           $i=0;
                              foreach($llistar_depts as $row){
                                 print "<tr>";
                                 print "<td><input id='p".$i."' type='checkbox' name='ids[]' value='".$row['id_departament']."' class='Checked'></td>";
                                 print "<td>".$row['id_departament']."</td>";
                                 print "<td><input class='p".$i."' type='text' name='nom[]' value='".$row['nom_departament']."' disabled></td>";
                                 print "<td><input class='p".$i."' type='text' name='desc[]' value= \" ".$row['descripcio_departament']." \"  disabled></td>";
                                 print "<tr>";
                                 $i++;
                              }
                              
                              ?>
                        </form>
                        <form id='creardept' action="index.php" method='post'>
                        <input type='hidden' name='r' value='creardept'>
                           <tr id='hidedept'>
                              <td colspan=2></td>
                              <td><input class='addtxt' type='text' name='nom'></td>
                              <td><input class='addtxt' type='text' name='descripcio'></td>
                           </tr>
                        </form>
                     </table>
                  </div>
                  <button onclick='editadept()' form='borrardept'>Edita</button>
                  <button type='submit' form='borrardept'>Borrar</button>
                  <button id='creardeptbut' onclick='creardept()'>Crear</button>
                  <button form='creardept' id='hidebutdept'>Enviar</button>
                  <br><br>  
               </td>
            </tr>
         </table>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      $("#hide").css("visibility", "hidden");
      $("#hidebut").css("visibility", "hidden");
      $("#crearusuariinput").css("visibility", "visible");

      $("#hidedept").css("visibility", "hidden");
      $("#hidebutdept").css("visibility", "hidden");
      $("#creardeptbut").css("visibility", "visible");

      function editausuari(){
        $("#formuser").val("edita");
      }
      function editadept(){
        $("#formdept").val("edita");
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
       
       
        function crearusuari(){
          $("#hide").css("visibility", "visible");
          $("#hidebut").css("visibility", "visible");
      $("#crearusuariinput").css("visibility", "hidden");
         
        }

        function creardept(){
          $("#hidedept").css("visibility", "visible");
          $("#hidebutdept").css("visibility", "visible");
        $("#creardeptbut").css("visibility", "hidden");
         
        }
        function validar(){
          var submit = 0;
          //validar correu
          var email = document.getElementById('mail').value;
          //document.write(email);
          if(!email.includes('@')){
            document.getElementById('mail').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('mail').classList.remove("incorrecte");}
        
          //validar nom
          var nom = document.getElementById('nom').value;
        
          if(hasNumber(nom) || nom.length==0){
            document.getElementById('nom').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('nom').classList.remove("incorrecte");}
        
          //validar cognom
          var cognom = document.getElementById('cognom').value;
          if(hasNumber(cognom) || cognom.length==0){
            document.getElementById('cognom').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('cognom').classList.remove("incorrecte");}
        
          //validar telefon
          var telefon = document.getElementById('telefon').value;
          if(telefon.length!=9 || !hasNumber(telefon)){
            document.getElementById('telefon').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('telefon').classList.remove("incorrecte");}
        
        //validar DNI
          var dni = document.getElementById('dni').value;
          if(!hasNumber(dni) || dni.length<9 || dni.length>9){
            document.getElementById('dni').classList.add("incorrecte");
          } else{document.getElementById('dni').classList.remove("incorrecte");}
        
         //validar usuari
         var usuari = document.getElementById('usuari').value;
          if(usuari.length==0 || usuari.length>20){
            document.getElementById('usuari').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('usuari').classList.remove("incorrecte");}
        
           //validar password
         var contrasenya = document.getElementById('contrasenya').value;
          if(contrasenya.length<8 || contrasenya.length>50 || !hasNumber(contrasenya) || !tiene_minusculas(contrasenya) || !tiene_letras(contrasenya) || !tiene_mayusculas(contrasenya)){
            document.getElementById('contrasenya').classList.add("incorrecte");
            submit = 1;
          } else{document.getElementById('contrasenya').classList.remove("incorrecte");}
        
          if(submit==0){
            enviar()
          }
        
        }
        function enviar(){
          document.getElementById("registre").submit();
        }  
        
        function hasNumber(myString) {
          return /\d/.test(myString);
        }
        
        
        
        function tiene_letras(texto){
          var letras="abcdefghyjklmnñopqrstuvwxyz";
          texto = texto.toLowerCase();
          for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1){
              return 1;
            }
          }
          return 0;
        }
        
        
        
        function tiene_minusculas(texto){
          var letras="abcdefghyjklmnñopqrstuvwxyz";
          for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1){
              return 1;
            }
          }
          return 0;
          }
          
          
        
        function tiene_mayusculas(texto){
          var letras_mayusculas="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";
          for(i=0; i<texto.length; i++){
            if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
              return 1;
            }
          }
          return 0;
        }
   </script>
</html>