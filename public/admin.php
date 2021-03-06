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
      <nav>
      </nav>
      <div class='sidebar'>
        <a href="#" class='menuesquerra actiu'>&nbsp&nbsp<img src="logos/admin_icon/panell.png" width='25px'><div>&nbsp&nbsp PANELL</div><a>
        <a href="admin_usuaris.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/people.png" width='25px'><div>&nbsp&nbsp USUARIS</div><a>
        <a href="admin_reserves.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/reserves.png" width='25px'><div>&nbsp&nbsp RESERVES</div><a>
        <a href="admin_calendari.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/calendari.png" width='25px'><div>&nbsp&nbsp CALENDARI</div><a>
        <a href="admin_habitacions.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/room.png" width='25px'><div>&nbsp&nbsp HABITACIONS</div><a>
      </div>
      <div class='pagina'>
      <table class='panell'>
         <tr>
            <td class='estructura'colspan='2'>
               <h3>Reserves</h3>
               <form id="reserves" action="../src/borrarreserva.php" method="post" class='reserves'>
                  <table id='taulareserves'>
                     <tr class='header'A>
                        <td></td>
                        <td>id_reserva</td>
                        <td>Nom</td>
                        <td>Cognom</td>
                        <td>Telefon</td>
                        <td>Correu</td>
                        <td>Ocupants</td>
                        <td>data arribada</td>
                        <td>data sortida</td>
                        <td>habitacio</td>
                        <td>Tipus</td>
                     </tr>
                     <?php
                        include '../src/database.php';
                        
                        $sql = "select r.id_reserva,r.num_ocupants,r.data_arribada,r.data_sortida, u.nom,u.cognom,u.tel,u.correu,h.id_habitacio,t.nom_tipus FROM reserva r, usuari u,reservahabitacio i,habitacio h,tipushabitacio t WHERE r.DNI=u.DNI AND r.id_reserva=i.id_reserva AND i.id_habitacio=h.id_habitacio AND h.id_tipus_habitacio=t.id_tipus;";
                        
                        foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
                        
                            print "<tr>";
                            print "<td><input type='checkbox' name='reserves[]' value='".$row['id_reserva']."'></td>";
                            print "<td>".$row['id_reserva']."</td>";
                            print "<td>".$row['nom']."</td>";
                            print "<td>".$row['cognom']."</td>";
                            print "<td>".$row['tel']."</td>";
                            print "<td>".$row['correu']."</td>";
                            print "<td>".$row['num_ocupants']."</td>";
                            print "<td>".$row['data_arribada']."</td>";
                            print "<td>".$row['data_sortida']."</td>";
                            print "<td>".$row['id_habitacio']."</td>";
                            print "<td>".$row['nom_tipus']."</td>";
                            print "<tr>";
                        }
                        
                        ?>
                  </table>
               </form>
               <button type='submit' form='reserves'>Borrar</button>
               <br><br>
            </td>
         </tr>
         <tr>
            <td class='estructura'>
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
                        <form id='borrartipus' action='../src/borrartipushabitacio.php' method='post'>
                        <?php
                           $sql = "select id_tipus,m_tipus,ocupants_tipus,preu,nom_tipus, desc_tipus from tipushabitacio;";
                           $habitacions = $conn->query($sql);
                           
                           
                           foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
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
                  <form id='creartipushabitacio' action="../src/creartipushabitacio.php" method='post'>
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
               <button id='creartipus' onclick='crearhabitacio()'>Crear</button>
               <button form='creartipushabitacio' id='hidebut'>envia</button>   
               <br><br>  
            </td>
            <td class='estructura estructurausuari'>
               <h3>CREAR USUARI</h3>
               <form id='registre' action="validacioregistre.php" method='GET' novalidate>
                  <label for="mail">
                  <span>Correu electronic: </span>
                  <input type="email" id="mail" name="mail" required minlength="8">
                  <span id="emailerr" class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="nom">
                  <span>Nom: </span>
                  <input type="text" id="nom" name="nom" required minlength="1">
                  <span id='nomerr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="cognom">
                  <span>Cognoms: </span>
                  <input type="text" id="cognom" name="cognom" required>
                  <span id='cognomerr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="dni">
                  <span>DNI: </span>
                  <input type="text" id="dni" name="dni" required minlength="9" maxlength="9">
                  <span id='dnierr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="telefon">
                  <span>Telefon:</span>
                  <input type="tel" id="telefon" name="telefon" required minlength="9" maxlength="9">
                  <span id='telefonerr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="usuari">
                  <span>Usuari: </span>
                  <input type="text" id="usuari" name="usuari" required minlength="8">
                  <span id='usuarierr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="contrasenya">
                  <span>Contrasenya: </span>
                  <input type="password" id="contrasenya" name="contrasenya" required minlength="8">
                  <span id='contrasenyaerr' class="error" aria-live="polite"></span>
                  </label>
                  <br>
                  <label for="rol">
                  <span>rol: </span>
                  <select name="rol" id="rol">
                  <?php
                     $sql= 'select id_departament,nom_departament from departament;';
                     $rols = $conn->query($sql);
                     
                     foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
                     print '<option value="'.$row['id_departament'].'">'.$row['nom_departament'].'</option>';
                     }
                     
                     ?>
                  </select>
                  </label>
               </form>
               <button onclick="validar()">Enviar</button>
            </td>
            </tr>
      </table>
     </div>
   </body>
   <script>
      document.getElementById('hide').style.visibility = "hidden";
      document.getElementById('hidebut').style.visibility = "hidden";
      document.getElementById('creartipus').style.visibility = "visible";
      
       function crearhabitacio(){
         document.getElementById('hide').style.visibility = "visible";
         document.getElementById('hidebut').style.visibility = "visible";
         document.getElementById('creartipus').style.visibility = "hidden";
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
         var letras="abcdefghyjklmn??opqrstuvwxyz";
         texto = texto.toLowerCase();
         for(i=0; i<texto.length; i++){
           if (letras.indexOf(texto.charAt(i),0)!=-1){
             return 1;
           }
         }
         return 0;
       }
       
       
       
       function tiene_minusculas(texto){
         var letras="abcdefghyjklmn??opqrstuvwxyz";
         for(i=0; i<texto.length; i++){
           if (letras.indexOf(texto.charAt(i),0)!=-1){
             return 1;
           }
         }
         return 0;
         }
         
         
       
       function tiene_mayusculas(texto){
         var letras_mayusculas="ABCDEFGHYJKLMN??OPQRSTUVWXYZ";
         for(i=0; i<texto.length; i++){
           if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
             return 1;
           }
         }
         return 0;
       }
   </script>
</html>