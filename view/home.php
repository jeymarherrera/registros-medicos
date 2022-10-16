<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical System</title>

    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="manifest" href="public/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <link href="public/css/theme.css" rel="stylesheet"/>  
  </head>

  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">Sobre Nosotros</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#departments">Departamentos</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#signup">Registros</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Ayuda</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Contactos</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="?op=crear">Ingresar</a>
        </div>
      </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="public/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Siempre <strong>trabajando </strong>por<br />contribuir <strong>una mejora en tu salud.</strong></h1>
              <p class="fs-1 mb-5">Puedes obtener atención  24-7. <br />Serás tratado por doctores especialistas. </p><a class="btn btn-lg btn-primary rounded-pill" href="#cita" role="button">Agendar una Cita</a>
            </div>
          </div>
        </div>
      </section>
    
      <section class="py-3" id="about">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/about-us.png);background-position:top center;background-size:contain;">
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
              <p>We think that everyone should have easy access to excellent <br class="d-none d-sm-block" />healthcare. Our aim is to make the procedure as simple as <br class="d-none d-sm-block" />possible for our patients and to offer treatment no matter<br class="d-none d-sm-block" />where they are — in person or at their convenience. </p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5" id="departments">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
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
      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(public/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="public/img/gallery/eye-care.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Cuida de tu vista con profesionales<br class="d-none d-sm-block" />y en cuenta.</h2>
              <p class="text-light">We've built a healthcare system that puts your needs first.<br class="d-none d-sm-block" />For us, there is nothing more important than the health of <br class="d-none d-sm-block" />you and your loved ones. </p>
              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Ver más </a></div>
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
      <section class="py-5">
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
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Oftamologo</p>
                            <p class="text-600 mb-0">, Panamá</p>
                            <p class="text-600 mb-4">12 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, Cardiologo</p>
                            <p class="text-600 mb-0">Paitilla, Panamá</p>
                            <p class="text-600 mb-4">25 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">Ver Perfil</button>
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
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Costa del Este, Panamá</p>
                            <p class="text-600 mb-4">10 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">Ver Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">Ver Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, Panamá</p>
                            <p class="text-600 mb-4">25 años de experiencia</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">Vier Pefil</button>
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
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="public/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">View Profile</button>
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

      <section class="py-5" id="cita">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <h1 class="text-center">REGISTRATE</h1>
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
                  <label class="form-label visually-hidden" for="inputCategory">Horario de Preferencia</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Horario</option>
                    <option> AM</option>
                    <option> PM</option>
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
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Tipo de cita</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Tipo</option>
                    <option> Primera Vez</option>
                    <option> Control</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Médico especialista</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Médico</option>
                    <option> Luis Díaz</option>
                    <option> José Mendéz</option>
                    <option> David López</option>
                    <option> María Pérez</option>
                    <option> Valentina Aponte</option>
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

      <section class="py-5" id="blog">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <h1 class="text-center">ARTICULOS RECIENTES</h1>
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
                  </svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">COVID-19: La información más reciente</h5><a class="stretched-link" href="#!">leer articulo completo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/laboratories.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Lifestyle</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 25, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Importancia de la acreditación por laboratorios</h5><a class="stretched-link" href="#!">leer articulo completo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/nicotine.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 28, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Los daños de la nicotina que conducen a la muerte</h5><a class="stretched-link" href="#!">leer articulo completoe</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="public/img/gallery/treatment.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Salud</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 30, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Tratamiento en pacientes con diabetes en COVID-19</h5><a class="stretched-link" href="#!">leer articulo completo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <h1 class="text-center">CONTACTO</h1>
            </div>
          </div>
        </div>
      </section> 
      
      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url(public/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>     
        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="public/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                      <p class="fw-normal mb-0">Founder Circle</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="public/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                      <p class="fw-normal mb-0">UI/UX Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="public/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                      <p class="fw-normal mb-0">Web Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
              <p class="text-light my-4">Lo que el mundo de la salud necesita <br />tecnología de la salud.</p>
            </div>
            <div class="col-12 col-sm-12 col-lg-3 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Departamentos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Oftamología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Cardiología</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Cardiología</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-12 col-lg-3 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Centrales Teléfonicos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Información del pacientes</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!"></a>507-5719</li>
                <li class="lh-lg"><a class="footer-link" href="#!"></a>507-5721</li>
                <li class="lh-lg"><a class="footer-link" href="#!">Atención al Cliente</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!"></a>507-5719</li>
                <li class="lh-lg"><a class="footer-link" href="#!"></a>507-5721</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- footer -->
        <section class="py-0 bg-primary">
          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; UTP, 2022</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200">
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                  </svg><a class="fw-bold text-info" href="" target="_blank">Universidad Tecnológica de Panamá</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>

    <script src="public/js/vendors/@popperjs/popper.min.js"></script>
    <script src="public/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="public/js/vendors/fontawesome/all.min.js"></script>
    <script src="public/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>