<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical System</title>
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
      <!-- AGENDAR CITA -->
      <section class="py-5" id="cita"><br>
        <div class="container">
          <div class="row">
            <div class="col-12 py-3" id="agenda-title">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <br><h1 class="text-center">AGENDA TU CITA CON NOSOTROS</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="py-3" >
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
          
            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="public/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3">
              <div class="col-md-6">
                  <label class="visually-hidden" for="inputName">Nombre</label>
                  <input class="form-control form-livedoc-control" id="inputName" type="text" placeholder="Nombre" required/>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputLastName">Apellido</label>
                  <input class="form-control form-livedoc-control" id="inputLastName" type="text" placeholder="Apellido" required/>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputID">Cédula</label>
                  <input class="form-control form-livedoc-control" id="inputID" type="text" placeholder="Cédula" required/>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputPhone">Teléfono</label>
                  <input class="form-control form-livedoc-control" id="inputPhone" type="text" placeholder="Teléfono" required/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Correo</label>
                  <input class="form-control form-livedoc-control" id="inputEmail" type="email" placeholder="Correo" required/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Especialidad</label>
                  <select class="form-select" id="inputCategory" required>
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
                  <label class="form-label visually-hidden" for="inputCategory">Horario de Preferencia</label>
                  <select class="form-select" id="inputCategory" type="select" required>
                    <option selected="selected">Horario</option>
                    <option> AM</option>
                    <option> PM</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Sede de Preferencia</label>
                  <select class="form-select" id="inputCategory" type="select" required>
                    <option selected="selected">Sede</option>
                    <option> Pedregal</option>
                    <option> Paitilla</option>
                    <option> San Miguelito</option>
                    <option> Vía España</option>
                    <option> 24 de diciembre</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Tipo de cita</label>
                  <select class="form-select" id="type" name="type" onchange="mostrar()" required>
                    <option value="0" selected>Tipo</option>
                    <option value="1"> Primera Vez</option>
                    <option value="2"> Control</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Médico especialista</label>
                  <select class="form-select" name="medico" id="medico" disabled>
                    <option value="0" selected>Médico</option>
                    <option value="1"> Luis Díaz</option>
                    <option value="2"> José Mendéz</option>
                    <option value="3"> David López</option>
                    <option value="4"> María Pérez</option>
                    <option value="5"> Valentina Aponte</option>
                  </select>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit">Agendar Cita</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
        <!-- footer -->
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