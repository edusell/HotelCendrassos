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
      <table class='panell'>
         <tr>
            <td class='estructura'colspan='2'>
               <h3>Reserves</h3>
               <form id="reserves" action="../src/borrarreserva.php" method="post" class='reserves'>
                  <table id='taulareserves'>
                     <tr>
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
                        <form action="crearreservaman.php">
                        <tr id='hide'>
                          
                        <td></td>
                        <td>DNI<input type='text'></input></td>
                        <td>ID_habitacio<input type='text'></td>
                        <td><input type='button'></input></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                     </tr>
                  </table>
                  </form>
               </form>
               <button type='submit' form='reserves'>Borrar</button>
               <button onclick='crearreserva()'>Crear</button>
            </td>
         </tr>
         <tr>
            <td class='estructura'> habitacions
              <div id='habitacions' class='reserves'>
            <table id='taulahabitacions'>
                     <tr>
                        <td>
                        <td>num</td>
                        <td>m<sup>2</sup></td>
                        <td>ocupants max</td>
                        <td>preu</td>
                        <td>ipus</td>
                        <td>descripcio</td>
                     </tr>
                     <?php
                        
                        $sql = "select id_habitacio,m_tipus,ocupants_tipus,preu,nom_tipus, desc_tipus from habitacio h, tipushabitacio t WHERE h.id_tipus_habitacio=t.id_tipus;";
                        $habitacions = $conn->query($sql);
                        
              
                        foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
                            print "<tr>";
                            print "<td><input type='checkbox' name='reserves[]' value='".$row['id_habitacio']."'></td>";
                            print "<td>".$row['id_habitacio']."</td>";
                            print "<td>".$row['m_tipus']."</td>";
                            print "<td>".$row['ocupants_tipus']."</td>";
                            print "<td>".$row['preu']."</td>";
                            print "<td>".$row['nom_tipus']."</td>";
                            print "<td id='desc'>".$row['desc_tipus']."</td>";
                            print "<tr>";
                        }
                        
                        ?>
                  </table>
                  </div>      

            </td>
            <td class='estructura estructurausuari'>
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
                     
      </table>
   </body>
   <script>
     document.getElementById('hide').style.visibility = "hidden";
      function crearreserva(){
        document.getElementById('hide').style.visibility = "visible";
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