<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
    form{
        width:50%;
        margin: 50px auto 0 auto;
    }
    </style>
</head>
<body>
    <!-- inici formulari -->
<form class="row g-3 needs-validation" action="validacioregistre.php" method='GET' novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id='nom' value="" required>
    <div class="invalid-feedback">
      Nom incorrecte
    </div>
  </div>
  <div class="col-md-4">
    <label id='lnom' for="validationCustom02" class="form-label">Cognoms</label>
    <input type="text" class="form-control" name="cognom" id="cognom" value="" required>
    <div class="invalid-feedback">
      Cognoms incorrectes
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">usuari</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="usuari" id="usuari" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Introduiu un usuari.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">correu</label>
    <input type="text" class="form-control" name="correu" id="correu" required>
    <div class="invalid-feedback">
      Introduiu un correu
    </div>
  </div>

  <div class="col-md-3">
    <label class="form-label">Telefon</label>
    <input type="number" class="form-control" name="tel" id="tel" required>
    <div class="invalid-feedback">
      Introduiu un telefon
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Contrasenya</label>
    <input type="text" class="form-control" name="password" id="password" required>
    <div class="invalid-feedback">
      Introduiu una contrasenya correcte
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acceptar condicions
      </label>
      <div class="invalid-feedback">
        Eu d'acceptar les condicions.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">REGISTRA'T</button>
  </div>
</form>
    <!-- final formulari -->
   
    <!-- validar formulari -->
  <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>
    <!-- final validar formulari -->
</body>
</html>