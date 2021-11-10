
        <!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <title>BardaStyle</title>

            <style>

                /* body{
                } */


                body{
                    background-color: black;
                    margin: 0px;
                    padding: 0px;
                    box-sizing: border-box;
                    font-family: sans-serif;

                }

                .logo{
                height: 60px;
                width: 150px;
                }

                .boton3 {
                color: #1971b9 !important;
                font-size: 20px;
                font-weight: 500;
                padding: 0.5em 1.2em;
                background: rgba(0,0,0,0);
                border: 2px solid;
                border-color: #1971b9;
                transition: all 0.3s ease;
                position: relative;
                }
                .boton3:hover {
                background: #1971b9;
                color: #fff !important;
                }

                .registrar{
                    padding: auto;
                    font-size: 19px;
                    font-weight: bold;
                    border: none;
                    background-color: rgba(255, 68, 0, 0.897);
                }
                button:hover{
                    background: white;

                }
                button:active{
                    background-color: rgba(255, 68, 0, 0.76);
                }

                footer{
                    margin-top: 90px;
                    width: 100%;
                    background:#575454;
                    color: rgb(255, 255, 255);
                    padding: 0%;
                }

                .contenedor-footer-all{
                    width: 100%;
                    max-width: 1200px;
                    margin: auto;

                }

                .contenedor-Body{
                    display: flex;
                    justify-content: space-between;
                }

                .columnaUno{
                    max-width: 400px;
                }

                .columnaUno h1{
                    font-size:22px;
                }

                .columnaDos{
                    max-width: 400px;
                }

                .columnaDos h1{
                    font-size: 22px;
                }


                .columnaTres{
                    max-width: 400px;
                left: 10px;
                }

                .columnaTres h1{
                    font-size: 22px;
                }

                .row{
                    margin-top: 20px;
                    display: flex;
                }
                .row img{
                    width:  36px;
                    height: 36px;
                }
                .row label{
                    margin-top: 10px;
                    margin-left: 20px;
                    max-width: 140px;
                }


                .contenedor-footer{
                    width: 100%;
                }


                .row2{
                    margin-top: 20px;
                    display: flex;
                }

                .row2 img{
                    width:  36px;
                    height: 36px;

                }

                .row2 label{
                margin-top: 10px;
                margin-left: 10px;
                }

                .contenedor-footer{
                    width: 97%;
                    background-color: black;
                    display: flex;
                    padding: 20px;
                    justify-content: space-between;
                }

                @media  ( max-width:800px ) {

                    .contenedor-Body{
                    flex-wrap: wrap;

                    }

                    .contenedor-footer{
                        flex-wrap: wrap;
                    }

                    .columnaDos,
                    .columnaTres{

                        margin-top: 50px;
                    }
                }

                a{
                    text-decoration: none;
                }

            </style>
          </head>
          <body>
            {{-- <div class="w-100 back p-5">
                <nav  class="navbar navbar-expand-lg navbar-light bg-light p-3 border-bottom fixed-top" id="mainNav">
                   <a class="navbar-brand"  href="#">FixOption</a>
                  <a title="home" href="/"><img src="../assets/img/logo-fix.png"  class="logo" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Acerca de</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contactanos</a>
                            </li>

                        </ul>
                        <div class=" ml-auto">
                            <div class="row">
                                <div class="col">
                                    <a class="btn boton3 " href="/Login"><span>Login</span></a>
                                </div>
                                <div class="col">
                                    <a class="btn boton3 " href="/register"><span>Registrate</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> --}}



            <div class="container flex">
                @yield('content')
            </div>

            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                  <span class="fs-4">BardaStyles</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a  href="{{ url('/dashboard') }}" class="nav-link active" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                      Citas
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                      Productos
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                      Promociones
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                      Personal
                    </a>
                  </li>
                </ul>
                <hr>
                <div class="dropdown">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Usuario</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
                </div>
              </div>

            <footer>

                <div class="contenedor-footer-all">

                    <div class="contenedor-Body">
                        <div class="columnaUno">

                            <h1> Calidad y profesionalismo a tu servicio</h1>
                        </div>
                        <div class="columnaDos">
                            <h1>Redes sociales</h1>

                            <div class="row2">
                                <img src="imagenes/facebook_icon.png" alt="">
                                <label for="">Siguenos en Facebook</label>
                            </div>
                            <div class="row2">
                                <img src="imagenes/instagram_icon.png" alt="">
                                <label for="">Siguenos en instagram</label>
                            </div>
                            <div class="row2">
                                <img src="imagenes/twitter.png" alt="">
                                <label for="">Siguenos en twitter</label>
                            </div>

                        </div>

                        <div class="columnaTres">

                            <h1> Información de contacto</h1>

                            <div class="row">
                                <img src="imagenes/reloj.png" alt="">

                                <label>
                                    Horarios:
                                    <br>
                                    lunes a sábados <br> 9am - 9pm
                                    <br>
                                    Domingos <br> 10am - 8pm
                                </label>
                            </div>

                            <div class="row">
                                <img src="imagenes/casa2.png" alt="">

                                <label> Dirección: Crr 89a no. 69a-2

                                </label>
                            </div>
                            <div class="row">
                                <img src="imagenes/telefono.png" alt="">

                                <label>

                                    Celular: 3136385732
                                </label>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="contenedor-footer">

                    <div class="copy">
                        Todos los derechos reservados
                    </div>

                </div>


            </footer>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            -->
          </body>
        </html>
