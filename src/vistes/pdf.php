<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="pdf.css"rel="stylesheet" type="text/css">
    <title>PDF</title>
</head>

<body id='body'>
    <div class="header">
        <h1>HOTEL CENDRASSOS</h1>
        <img src="logos/logo-hotel.png" alt="img" width='100mm'>
        <p>Carrer Pelai Martínez, 1, 17600 Figueres, Girona</p>
        <p>tel. 000 000 000</p>
        <p>infohotelcendrassos.com</p>
    </div>
    <hr>
    <p>RESERVA N<sup>o </sup><?= $in[0]['id_reserva']; ?></p>
    <hr>
    <div class="info">
        <table>
            <tr>
                <th>NOM: </th>
                <td><?= $in[0]['nom'].' '.$in[0]['cognom'] ?></td>
            </tr>
            <tr>
                <th>DNI/NIE:</th>
                <td><?= $in[0]['DNI']; ?></td>
            </tr>
            <tr>
                <th>TELEFON:</th>
                <td><?= $in[0]['tel']; ?></td>
            </tr>
            <tr>
                <th>CORREU ELECTRONIC:</th>
                <td><?= $in[0]['correu']; ?></td>
            </tr>
            <tr>
                <th>DATA ENTRADA</th>
                <td><?= $in[0]['data_arribada']; ?></td>
            </tr>
            <tr>
                <th>DATA SORTIDA</th>
                <td><?= $in[0]['data_sortida']; ?></td>
            </tr>
            <tr>
                <th>OCUPANTS</th>
                <td><?= $in[0]['num_ocupants']; ?></td>
            </tr>
        </table>
        </div>
        <hr style='width:30%'>
        <div class='reserva'>
            <table class='r'>
                <tr>
                    <td style='width:50%'>
                        <img src="img/uploads/habitacio_doble.jpg" alt="img" width="100%">
                    </td>
                    <td>
                        <h4><?= $in[0]['nom_tipus']; ?>  -  <?= $in[0]['m_tipus']; ?> m<sup>2</sup></h4>
                        <ul>
                           
                           -<?= $in[0]['desc_tipus']; ?> <br>
                           -<?= $in[0]['serveis_tipus']; ?><br><br>
                           TOTAL: <?= $in[0]['preu']; ?>
                        </ul>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>var doc = new jsPDF();

//var specialElementHandlers = {
    //'#elementH': function (element, renderer) {
     //   return true;
    //}
//};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>-->

<script>
 
    window.print();
 
$('#createPDF').click(function () {

var pdf = new jsPDF();
var options = {
     pagesplit: false
};

pdf.addHTML(document.getElementById('pagina'),0, 0, options,function() {
    pdf.download="document1.pdf";
    //printPDF(pdf);
    pdf.save("document.pdf");
});
});

</script>
</html>