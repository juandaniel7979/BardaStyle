<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register:BardaStyle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

          <!-- Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                /* background-image: url(https://static.vecteezy.com/system/resources/previews/002/377/948/non_2x/barbershop-black-and-white-background-free-vector.jpg);
                background-repeat: no-repeat; */
                /* background-image: url("../images/fondo.jpg"); */
                background-color: #1971b9;

            }

            .ruter{
                text-decoration: none;
                font-weight: bold;
                font-size: 1.5rem;
                color: grey;
            }
            .ocultar{
                visibility:hidden;
                position: absolute;
            }

            .home{
                /* background-image: url(https://static.vecteezy.com/system/resources/previews/002/377/948/non_2x/barbershop-black-and-white-background-free-vector.jpg); */
                height: 1000px;

                /* padding: 0 5rem; */

                /* display: flex;
                justify-content: center;
                align-items: center; */

            }

            .logo img{
                width: 250px;
                padding-top: 50px;
                display:block;
                margin:auto;
            }
            .card{
                background-image: url(../images/fondo.jpg);
                border-radius: 25px;
                max-width: 40%;
                margin-left: auto;
                margin-right: auto;
                /* display: flex;
                justify-content: center;
                align-items: center; */
            }
            .card .btn{
                background-color: #1971b9;
                color: #fff;
                display:block;
                margin:auto;
            }
            .vela{
                margin-top: -30px;
                max-width: 70%;
                height: 10px;
                text-decoration: none;
                border-style: none;
                background-color: #e20514;
            }
            @media only screen and (max-width: 600px) {
                .card {
                    max-width: 100%;
                }
            }
        </style>
    </head>
    <!--Body-->

    <body class="antialiased">
        <div class="home">
            <!-- <div class="logo"><img   :src="require('../assets/img/LOGOazul.png')" alt="logo de digital entrepreneurs" width="200px"></div> -->
            <div class="card center-align" style="margin-top:50px;text-align:center;" >
                <h2>Bienvenido a<span style="font-weight: bold;" class="font-weight-bold"> BarbaStyle</span></h2>
                <h5>Registrate para empezar a recibir los beneficios</h5>
            <div class="m-3 flex">
                <ul class="nav nav-tabs row">
                <li class="nav-item col">
                    <a class="nav-link ruter"  href="{{ url('/login') }}">Iniciar sesion</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link active ruter" href="">Registrate</a>
                </li>
                </ul>
            </div>
                <form @submit.prevent="login(usuario)">
                <div class="row">
                    <br>
                    <div class="row">
                        <!-- <label style="position:left;" for="TD">Tipo de documento</label> -->
                        <div class="input-field col s6 m-3 formulario">
                            <select style="width:220px" name="TD" id="TD" class="btn btn-secondary">
                                <option value="" disabled selected>Tipo de documento</option>
                                <option value="CC" id="CC">CC</option>
                                <option value="CC" id="CC">CC</option>
                                <option value="CE" id="CE">CE</option>
                            </select>
                         </div>
                       <!-- <div class="input-field col s12">
                            <select id="selector">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
                            <label>Materialize Select</label>
                        </div> -->
                        <div class="input-field col s6 m-3 formulario">
                            <input id="documento" type="number" class="validate" >
                            <label for="documento">Documento</label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <label style="position:left;" for="documento">Documento</label> -->

                    </div>
                    <div class="row">
                        <!-- <label style="position:left;" for="nombre">Nombre</label> -->
                        <div class="input-field col s6 m-3 formulario">
                            <input id="nombre" type="text" class="validate" >
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-field col s6 m-3 formulario">
                            <input id="apellido" type="text" class="validate" >
                            <label for="apellido">Apellido</label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <label style="position:left;" for="documento">Documento</label> -->
                        <div class="input-field col s6 m-3 formulario">
                            <input id="Telefono" type="number" class="validate" >
                            <label for="Telefono">Telefono</label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <label style="position:left;" for="email">Email</label> -->
                        <div class="input-field col s6 m-3 formulario">
                            <input id="email" type="email" class="validate" >
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s6 m-3 formulario">
                            <input id="email2" type="email" class="validate">
                            <label for="email2">Confirma tu email</label>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <label style="position:left;" for="password">Contraseña</label> -->
                        <div class="input-field col s6 m-3 formulario">
                            <input id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s6 m-3 formulario">
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirma tu contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <label style="position:left;" for="password">Contraseña</label> -->

                    </div>
                    <div class="row">

                    </div>
                    <div class="row">

                    </div>

                </div>
                <button type="submit" class="btn waves-effect waves-light btn-large"><b>Registrarse</b></button>
                <hr class="vela">
                <br><br>
                <router-link to="/forgot">Olvidaste tu contraseña?</router-link>
            </form>
            </div>
            </div>
    </div>
    <footer><a href="https://www.vecteezy.com/free-vector/barbershop">Barbershop Vectors by Vecteezy</a></footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });

  // Or with jQuery

//   $(document).ready(function(){
//     $('select').formSelect();
//   });
    </script>
    </body>
</html>
