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
  <link href="public/css/theme.css" rel="stylesheet"/>  
  </head>

  <body>
    <main class="main" id="top">
      <?php
      require_once 'view/template/header.php';
      ?>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="public/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Siempre <strong>trabajando</strong> por contribuir <strong>una mejora en tu salud.</strong></h1>
              <p class="fs-1 mb-5">Puedes obtener atención  24/7 y ser tratado por <br/>los doctores más especializados de todo el país. </p><a class="btn btn-lg btn-primary rounded-pill" href="?op=agendar" role="button">Agendar una Cita</a>
            </div>
          </div>
        </div>
      </section>
    
      <section class="py-3" id="about">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              </div>
              <h1 class="text-center">SOBRE NOSOTROS</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="py-3">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="public/img/gallery/health-care.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Estamos desarrollando un <br class="d-none d-sm-block" />sistemas de cuidados para tí</h2>
              <p>Somos fieles creyentes de que todos merecemos la mejor atención<br class="d-none d-sm-block" />médica. Tratamos de hacer lo mejor posible por cuidar vidas<br class="d-none d-sm-block"/> y que nuestros pacientes puedan tener la tranquilidad de garantizar su salud con nosotros.
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Saber Más </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5" id="departments">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              </div>
              <h1 class="text-center">NUESTROS DEPARTAMENTOS</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0">
        <div class="container">
          <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/neurology.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/neurology.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Neurología</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/eye-care.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/eye-care.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Oftalmología</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/cardiac.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/cardiac.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Radiología</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/heart.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/heart.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Cardiología</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/osteoporosis.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/osteoporosis.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Osteoporosis</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="public/img/icons/ent.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="public/img/icons/ent.svg" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Otorrinología</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section class="bg-secondary" id="info">
        <div class="bg-holder" style="background-image:url(public/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="public/img/gallery/eye-care.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Horario de Atención<br class="d-none d-sm-block" /></h2>
              <p class="text-light">“Servir con eficiencia, calidad y humanismo a todos los panameños” <br><br class="d-none d-sm-block" />- De 6:00 a.m. a 12:00 p.m. <br><br> Se darán citas médicas de todas las especialidades ofrecidas, en la Consulta Externa a TODO PÚBLICO, que cumpla con los requisitos mencionados. <br><br class="d-none d-sm-block" />- De 12:00 p.m. a 3:00 p.m. <br><br> Se dará cita a todos los pacientes que hayan sido atendidos, el mismo día, en la Consulta Externa del Hospital Santo Tomás. Como también a los pacientes de Sala de Hospitalización y Urgencias, que se les dio salida el mismo día. </p>
            </div>
          </div>
        </div>
      </section>


      <section class="pb-0">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
              </div>
              <h1 class="text-center">NUESTROS DOCTORES</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" id="medicos">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
        </div>
        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/1.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Rosa J. Vargas</h5>
                            <p class="mb-0 fs-xxl-1">Neurología</p>
                            <p class="text-600 mb-0">24 de Diciembre, Panamá</p>
                            <p class="text-600 mb-4">17 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type=button" href="https://www.linkedin.com/in/rosa-vargas-b7647313b/" >Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/2.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Andreina Peréz</h5>
                            <p class="mb-0 fs-xxl-1">Oftalmología</p>
                            <p class="text-600 mb-0">24 de Diciembre, Panamá</p>
                            <p class="text-600 mb-4">12 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/andreina-p%C3%A9rez-rodr%C3%ADguez/">Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/3.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Luisa Suarez</h5>
                            <p class="mb-0 fs-xxl-1">Cardiología</p>
                            <p class="text-600 mb-0">Pedregal, Panamá</p>
                            <p class="text-600 mb-4">13 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/luisa-suarez-a4a16729/">Ver Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/4.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Andrea Herrera</h5>
                            <p class="mb-0 fs-xxl-1">Otorrinología</p>
                            <p class="text-600 mb-0">Costa del Este, Panamá</p>
                            <p class="text-600 mb-4">5 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/andrea-herrera-cabezas-b3519827/">Ver Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/5.jpg.png"width="128" alt="..." />
                            <h5 class="mt-3">Fabiana Alexandre</h5>
                            <p class="mb-0 fs-xxl-1">Medicina General</p>
                            <p class="text-600 mb-0">Pedregal, Panamá</p>
                            <p class="text-600 mb-4">11 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/fabiana-alexandre-55766624/">Ver Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/6.jpg.png"width="128" alt="..." />
                            <h5 class="mt-3">Mario Vargas</h5>
                            <p class="mb-0 fs-xxl-1">Radiología</p>
                            <p class="text-600 mb-0">San Fernando, Panamá</p>
                            <p class="text-600 mb-4">6 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/mario-hugo-vargas-aquino-55197033/">Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/7.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Angel Rodriguez</h5>
                            <p class="mb-0 fs-xxl-1">Neumología</p>
                            <p class="text-600 mb-0">Paitilla, Panamá</p>
                            <p class="text-600 mb-4">4 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/angel-rodr%C3%ADguez-809638180/">Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/1.jpg.png" width="128" alt="..." />
                            <h5 class="mt-3">Marina Barrios</h5>
                            <p class="mb-0 fs-xxl-1">Osteoporosis</p>
                            <p class="text-600 mb-0">San Antonio, Panamá</p>
                            <p class="text-600 mb-4">11 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/minabarrio/">Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/doctors/6.jpg.png"width="128" alt="..." />
                            <h5 class="mt-3">Mario Leo</h5>
                            <p class="mb-0 fs-xxl-1">Cardiología</p>
                            <p class="text-600 mb-0">Chorrera, Panamá</p>
                            <p class="text-600 mb-4">14 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="button" href="https://www.linkedin.com/in/mario-leo-avila/">Ver Pefil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5" id="blog">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <h1 class="text-center">ARTÍCULOS RECIENTES</h1>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/covid-19.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 21, 2022</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">COVID-19: La información más reciente</h5><a class="stretched-link" href="#!">Leer artículo completo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/laboratories.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 25, 2022</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Importancia de la acreditación por laboratorios</h5><a class="stretched-link" href="#!">Leer artículo completo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/nicotine.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 28, 2022</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Los daños de la nicotina que conducen a la muerte</h5><a class="stretched-link" href="#!">Leer artículo completo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/treatment.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 30, 2022</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Tratamiento en pacientes con diabetes en COVID-19</h5><a class="stretched-link" href="#!">Leer artículo completo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 

      <!-- footer -->
      <section class="bg-primary">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
        </div>
        </div>
      </section>
      <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url(public/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <div class="container">
          <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="" height="51" alt="" /></a>
              <p class="text-light my-4">Lo que el mundo de la salud necesita <br/>tecnología de la salud.</p>
            </div>
            <div class="col-12 col-sm-12 col-lg-3 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Departamentos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Neurología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Oftalmología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Radiología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Cardiología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Osteoporosis</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Otorrinología</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-12 col-lg-3 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Centrales Teléfonicos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Información del pacientes</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">+507-6834-2342</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">+507-6313-5311</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Atención al Cliente</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">+507-6023-4532</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">+507-6045-2345</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- footer -->
        <?php
        require_once 'view/template/footer.php';
        ?>
      </section>
    </main>
    <script src="public/js/vendors/@popperjs/popper.min.js"></script>
    <script src="public/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="public/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>