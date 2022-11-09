<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical System - Registro</title>
  <link rel="apple-touch-icon" sizes="180x180" href="public/img/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public/img/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="public/img/logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="public/img/logo.png">
  <link rel="manifest" href="public/img/favicons/manifest.json">
  <meta name="theme-color" content="#ffffff">
  <link href="public/lib/theme.css" rel="stylesheet"/>
</head>

<body>    
      <?php
      require_once 'view/template/header.php';
      ?>  
    <section class="py-6" id="cita">
    <div class="container">
        <br><h1 class="fw-light font-base fs-6 fs-xxl-7" id="register">¿Eres parte de<strong> nuestro equipo médico</strong>?</h1>
    </div>
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="public/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                     <h3 class="text-primary"><i class="me-2"></i>Registrate</h3>
                    </a>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputName">Nombre</label>
                  <input class="form-control form-livedoc-control" id="inputName" type="text" placeholder="Nombre" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputLastName">Apellido</label>
                  <input class="form-control form-livedoc-control" id="inputLastName" type="text" placeholder="Apellido" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputID">Cédula</label>
                  <input class="form-control form-livedoc-control" id="inputID" type="text" placeholder="Cédula" />
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="inputCod">Permiso para ejercer</label>
                    <input class="form-control form-livedoc-control" id="inputCod" type="text" placeholder="Permiso" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputPhone">Teléfono</label>
                  <input class="form-control form-livedoc-control" id="inputPhone" type="text" placeholder="Teléfono" />
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Correo</label>
                  <input class="form-control form-livedoc-control" id="inputEmail" type="email" placeholder="Correo"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Especialidad</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Especialidad</option>
                    <option> Neurología</option>
                    <option> Oftalmología</option>
                    <option> Radiología</option>
                    <option> Cardiología</option>
                    <option> Osteoporosis</option>
                    <option> Otorrinología</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Sede de Preferencia</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Sede</option>
                    <option> Pedregal</option>
                    <option> Paitilla</option>
                    <option> San Miguelito</option>
                    <option> Vía España</option>
                    <option> 24 de diciembre</option>
                  </select>
                </div>       
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit" href="?op">Registrarme</button>
                    <p class="text-center mb-0">¿Ya tienes cuenta? <a href="./?op=acceder"> Iniciar Sesion.</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> 
      <?php
      require_once 'view/template/footer.php';
      ?> 
    <script src="public/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="public/lib/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
</body>
</html>