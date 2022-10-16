<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical System - Recuperar Contraseña</title>

    <link href="public/img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <link href="public/css/theme.css" rel="stylesheet" />
</head>

<body> 
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/chart/chart.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/waypoints/waypoints.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="public/js/main.js"></script>
</body>
</html>