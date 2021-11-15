<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
    <link href="mcss.css"rel="stylesheet" type="text/css">

    <title>Document</title>
</head>
<style>
    h2{
        color:white;
        text-align:center;
    }
</style>
<body>
    <!--NAVBAR-->
    <?php include 'menu.php'; ?>

    <div class='container-contacte'>

        <div class='contacte descktop'>
            <table class='taulacontacte'>
                <tr>
                    <td id='contacte_esquerra'></td>
                    <td id='contacte_dreta'>
                        <h2>CONTACTE</h2>
                        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Eduard">
  </div>
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">Cognom</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Sellas">
  </div>
  <div class="col-12">
  <label for="inputEmail4" class="form-label" >Email</label>
    <input type="email" class="form-control" placeholder='info@hotelcendrassos.com' id="inputEmail4">
  </div>
  <div class="col-12">
      <label>Missatge</label><br>
    <textarea name="a" id="" cols="60" rows="5"></textarea>
</div>
</form>
                    </td>
                </tr>
            </table>
        </div>

        <div class='mobile contacte-m'>
        <h2>CONTACTE</h2>
                        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Eduard">
  </div>
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">Cognom</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Sellas">
  </div>
  <div class="col-12">
  <label for="inputEmail4" class="form-label" >Email</label>
    <input type="email" class="form-control" placeholder='info@hotelcendrassos.com' id="inputEmail4">
  </div>
  <div class="col-12">
      <label>Missatge</label><br>
    <textarea name="a" id="" cols="30" rows="5"></textarea>
</div>
</form>
        </div>
    </div>
    <hr>
<h2>EN PERSONA</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2257547387367!2d2.962496515453574!3d42.27370407919278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1636656220172!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!--FOOTER-->
    <?php include 'footerprim.php' ?>
</body>
</html>