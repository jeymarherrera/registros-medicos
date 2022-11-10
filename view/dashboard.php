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
    <!-- Libraries Stylesheet -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="public/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once 'view/template/dashboard-header.php';
    ?>

    <!-- reportes -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Ingresos del Día</p>
                        <h6 class="mb-0">$1664</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Ingresos</p>
                        <h6 class="mb-0">$11664</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Citas del Día</p>
                        <h6 class="mb-0">16</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Citas</p>
                        <h6 class="mb-0">166</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="m-n2">
               <a href="?op=nuevaCita"><button class="btn btn-primary w-100 m-2" type="button">Agendar Nueva Cita</button></a>
            </div>
        </div>
    </div>
    <!-- Registros recientes -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Citas Programadas</h6>
                <a href="">Mostrar Todo</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Número de Cita</th>
                            <th scope="col">Fecha y Hora</th>
                            <th scope="col">ID Paciente</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Referencia</th>
                            <th scope="col">Atendido</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Información</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>25/09/2024 2:05 PM</td>
                            <td>8-122-2349</td>
                            <td>Daniel Gonzalez</td>
                            <td>Cardiología</td>
                            <td>Monitoreo del ritmo cardiaco</td>
                            <td>Dr. Juan Alvarez</td>
                            <td><a class="btn btn-sm btn-primary" href="">Atendido</a></td>
                               <td><a class="btn btn-sm btn-primary" href="">Modificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>25/09/2024 2:05 PM</td>
                            <td>8-122-2349</td>
                            <td>Daniel Gonzalez</td>
                            <td>Cardiología</td>
                            <td>Monitoreo del ritmo cardiaco</td>
                            <td>Dr. Juan Alvarez</td>
                            <td><a class="btn btn-sm btn-primary" href="">Atendido</a></td>
                               <td><a class="btn btn-sm btn-primary" href="">Modificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                        <td>01</td>
                            <td>25/09/2024 2:05 PM</td>
                            <td>8-122-2349</td>
                            <td>Daniel Gonzalez</td>
                            <td>Cardiología</td>
                            <td>Monitoreo del ritmo cardiaco</td>
                            <td>Dr. Juan Alvarez</td>
                            <td><a class="btn btn-sm btn-primary" href="">Atendido</a></td>
                               <td><a class="btn btn-sm btn-primary" href="">Modificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>25/09/2024 2:05 PM</td>
                            <td>8-122-2349</td>
                            <td>Daniel Gonzalez</td>
                            <td>Cardiología</td>
                            <td>Monitoreo del ritmo cardiaco</td>
                            <td>Dr. Juan Alvarez</td>
                            <td><a class="btn btn-sm btn-primary" href="">Atendido</a></td>
                               <td><a class="btn btn-sm btn-primary" href="">Modificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>25/09/2024 2:05 PM</td>
                            <td>8-122-2349</td>
                            <td>Daniel Gonzalez</td>
                            <td>Cardiología</td>
                            <td>Monitoreo del ritmo cardiaco</td>
                            <td>Dr. Juan Alvarez</td>
                            <td><a class="btn btn-sm btn-primary" href="">Atendido</a></td>
                               <td><a class="btn btn-sm btn-primary" href="">Modificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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