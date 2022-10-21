<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical System - Recuperar Contraseña</title>
  <link rel="apple-touch-icon" sizes="180x180" href="public/img/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public/img/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="public/img/logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="public/img/logo.png">
  <link rel="manifest" href="public/img/favicons/manifest.json">
  <meta name="theme-color" content="#ffffff">
  <link href="public/css/theme.css" rel="stylesheet"/>
</head>

<body> 
    <?php
      require_once 'view/template/header.php';
      ?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" method="POST" action="./?op=acceder" >
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="me-2"></i>Recuperar Contraseña</h3>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <label class="visually-hidden" for="inputEmail">Correo</label>
                            <input class="form-control form-livedoc-control" id="inputEmail" type="text" placeholder="Correo" />
                        </div><br>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4 rounded-pill">Enviar</button>
                        <p class="text-center mb-0">¿No tienes cuenta? <a href="./?op=crear"> Registrate.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/vendors/@popperjs/popper.min.js"></script>
    <script src="public/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="public/js/vendors/fontawesome/all.min.js"></script>
    <script src="public/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
</body>
</html>