<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login:BardaStyle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

          <!-- Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
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
                background-image: url(../assets/img/memphis-mini-dark.png);
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
        <div class="home ">
            <!-- <div class="logo"><img   :src="require('../assets/img/LOGOazul.png')" alt="logo de digital entrepreneurs" width="200px"></div> -->
            <div class="card center-align" style="margin-top:50px;text-align:center;" >
                <h2>Bienvenido a<span style="font-weight: bold;" class="font-weight-bold"> BarbaStyle</span></h2>
            <div class="m-3 flex">
                <ul class="nav nav-tabs row">
                <li class="nav-item col">
                    <a class="nav-link active ruter" aria-current="page" >Iniciar sesion</a>
                </li>
                <li class="nav-item col">
                    <!-- <router-link class="nav-link ruter" to="/register">Registrate</router-link> -->
                    <a class="nav-link ruter" href="{{ url('/register') }}">Register</a>
                </li>
                </ul>
            </div>
                <form >
                <div class="row">
                    <br>
                    <div class="input-field col s6 m-3 formulario">
                        <input id="user" placeholder="ingresa tu correo electronico" name="user" type="text" class="validate" v-model="usuario.correo">
                        <label for="user">Correo</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m-3 formulario">
                            <input id="password" placeholder="ingresa tu contrase??a" name="pass" type="password" class="validate" v-model="usuario.password">
                            <label for="password">Contrase??a</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn waves-effect waves-light btn-large"><b>Iniciar Sesi??n</b></button>
                <hr class="vela">
                <br><br>
                <router-link to="/forgot">Olvidaste tu contrase??a?</router-link>
            </form>
            </div>
            </div>
    </div>
    </body>
</html>
