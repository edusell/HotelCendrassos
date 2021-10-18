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
                <form id="reserves" action="borrarreserva.php" method="post" class='reserves'>
                    <table id='taulareserves'>
                        <tr>
                            <td>
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
                        include 'database.php';

                        $sql = "select r.id_reserva,r.num_ocupants,r.data_arribada,r.data_sortida, u.nom,u.cognom,u.tel,u.correu,h.id_habitacio,t.nom_tipus FROM reserva r, usuari u,reservahabitacio i,habitacio h,tipushabitacio t WHERE r.DNI=u.DNI AND r.id_reserva=i.id_reserva AND i.id_habitacio=h.id_habitacio AND h.id_tipus_habitacio=t.id_tipus;";
                        $reserves = $conn->query($sql);

                        while($row = $reserves->fetch_assoc()) {
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
            </td>
        </tr>
        <tr>
            <td class='estructura'></td>
            <td class='estructura'></td>
        </tr>
    </table>
    
</body>
</html>