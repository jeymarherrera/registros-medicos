<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Medical System</title>
    <!-- Logos -->
    <link href="public/img/logo.png" rel="icon">
    <link href="public/img/logo.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="public/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once 'view/template/dashboard-header.php';
    ?>

<!-- formulario -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ingrese los datos de la historia clinica del nuevo paciente</h6>
            <form>
                <div class="mb-3">
                    <label for="id" class="form-label">Cedula</label>
                    <input type="id" class="form-control" id="id">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="lstname" class="form-control" id="lastname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono</label>
                    <input type="phone" class="form-control" id="phone">
                </div>
                <p>Seleccione su sexo</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Femenino</label>
                </div>
                <div class="mb-3">
                    <br><label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <label for="pais" class="form-label">Provincia</label>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Panamá</option>
                    <option value="2">Cocle</option>
                    <option value="3">Colon</option>
                </select>
               <br><br>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>

    <?php
    require_once 'view/template/dashboard-footer.php';
    ?>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>