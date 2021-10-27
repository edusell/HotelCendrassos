<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitacions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
</head>
<body>
    <?php include "menu.php";?>

    <?php $data_avui = date("Y-m-d");?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="logos\slider_habitacions\habitacio1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="logos\slider_habitacions\habitacio2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="reserva">
        <form action="index.php?r=recerca&" method='GET'>
               <input type="hidden" name="r" value='recerca'>
               <label> Data arribada <input type="date" id="arribada" name="arribada_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31" required></label>
               <label> Data sortida  <input type="date" id="sortida" name="sortida_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31"></label>
               <label> Ocupants  <input type="number" id="ocupants" name="ocupants"min="1" max="6" required></label>
               <button >Reserva</button>
            </form>
              </div>
        </div>
        <div class="habitacions">
            <h1>Tipus de habitacions</h1>
        </div>
        
        <?php 
            
            foreach($llistar_tiphab as $row){
                print "<div class='container_tipus_habitacions'>";
                print '<div class="tipus_habitacions">';
                  print"<h3>".$row['nom_tipus']."</h3>";
                  print'<div class="container_imatges_habitacions">';
                    print'<div class="imatges_habitacions"></div>';
                        print'<div class="text">';
                            print"<p>".$row['desc_tipus']."</p>";
                            print"<div class='especificacions'>";
                                print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                                print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                                print "<img src='logos\habitacions_logos\information.png'>";
                                print"<p><b>".$row['m_tipus']."m<sub>2 </sub></b></p>";
                            print"</div>";
                            print"<div class='preu'>".$row['preu']."€ </div>";
                            print"<a href='habitacions.php#arribada_hotel'><div class='boto'>Reserva</div></a>";
                        print"</div>";
                  print"</div>";
                print"</div>";
                print "</div>";}

            
        
        //include '..\src\database.php';

           /* $stm1 = $conn->prepare("select COUNT(*) from usuari where DNI = :dni;");
            

                             $sql = "SELECT * FROM tipushabitacio";
                             $tipus_habitacions = $conn->query($sql);




                             //while($row = $tipus_habitacions->fetch_assoc()) {

                                foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
                                if($row['id_tipus']==1){
                                    $img = 'habitacio_familiar.jpg';
                                } else {
                                    $img = 'habitacio_doble.jpg';
                                }

        print "<div class='container_tipus_habitacions'>";
            print '<div class="tipus_habitacions">';
              print"<h3>".$row['nom_tipus']."</h3>";
              print'<div class="container_imatges_habitacions">';
                print'<div class="imatges_habitacions"></div>';
                    print'<div class="text">';
                        print"<p>".$row['desc_tipus']."</p>";
                        print"<div class='especificacions'>";
                            print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                            print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                            print "<img src='logos\habitacions_logos\information.png'>";
                            print"<p><b>".$row['m_tipus']."m<sub>2 </sub></b></p>";
                        print"</div>";
                        print"<div class='preu'>".$row['preu']."€ </div>";
                        print"<a href='habitacions.php#arribada_hotel'><div class='boto'>Reserva</div></a>";
                    print"</div>";
              print"</div>";
            print"</div>";
            print "</div>";}*/
        ?>

        </div> 

    <!--    <footer>
        <div class="logos_footer">
            <img src="logos\footer\twiter_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\facebook_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\youtube_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\instagram_logo.png" alt="..." width="60" height="60">


            </div>
            <ul class="footer_ul">
                <li ><a href="Pagina_principal.php"><p class="footer_seccions">Pagina principal</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="Habitacions.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="contacta.php"><p class="footer_seccions">Contacta</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">galeria</p></li>
            </ul>
        </footer>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<?php include 'footerprim.php';?>
</html>