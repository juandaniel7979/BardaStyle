
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

                body{
                    background-color: black;
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

                nav{
                    background-color:#1f1f1f;
                }

                nav .btn-outline{
                    color:white ;
                    text-align: right;
                }

                nav .btn-outline:hover{
                    background-color: white;
                    border-style: solid;
                    border-width: 2px;
                    border-color: #1971b9;
                    font-style: solid;
                    color:#1971b9;

                }
                nav .btn-outline span:hover{

                    color:#1971b9;

                }
                .bg-dark{
                background-color: blue,!important;;
                }
                h3 {
                    margin: 40px 0 0;
                }
                ul {
                    list-style-type: none;
                    padding: 0;
                }
                li {
                    display: inline-block;
                    margin: 0 10px;
                }
                a {
                    color: white !important;
                }

                .border {
                    border: 2px blue dashed;
                }

                .mr-0 {
                    margin-right: 0;
                }
                .ml-auto {
                    margin-left:auto;
                }
                .d-block {
                    display:block;
                }

                #mainNav {
                padding-top: 1rem;
                padding-bottom: 1rem;
                background-color: #1f1f1f !important;
                }
                #mainNav .navbar-toggler {
                padding: 0.75rem;
                font-size: 0.75rem;
                font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                text-transform: uppercase;
                font-weight: 700;
                }
                #mainNav .navbar-brand {
                color: #ffc800;
                font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 700;
                letter-spacing: 0.0625em;
                text-transform: uppercase;
                }
                #mainNav .navbar-brand img {
                height: 1.5rem;
                }
                #mainNav .navbar-nav .nav-item .nav-link {
                font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 0.95rem;
                color: #1f1f1f;
                letter-spacing: 0.0625em;
                }
                #mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
                color: #ffc800;
                }

                @media (min-width: 992px) {
                #mainNav {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                    border: none;
                    background-color: transparent;
                    transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
                }
                #mainNav .navbar-brand {
                    font-size: 1.5em;
                    transition: font-size 0.3s ease-in-out;
                }
                #mainNav .navbar-brand img {
                    height: 2rem;
                    transition: height 0.3s ease-in-out;
                }
                #mainNav.navbar-shrink {
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    background-color: #212529;
                }
                #mainNav.navbar-shrink .navbar-brand {
                    font-size: 1.25em;
                }
                #mainNav.navbar-shrink .navbar-brand svg,
                #mainNav.navbar-shrink .navbar-brand img {
                    height: 1.5rem;
                }
                #mainNav .navbar-nav .nav-item {
                    margin-right: 1rem;
                }
                #mainNav .navbar-nav .nav-item:last-child {
                    margin-right: 0;
                }
                }
            </style>
          </head>
          <body>
            <div class="w-100 back p-5">
                <nav  class="navbar navbar-expand-lg navbar-light bg-light p-3 border-bottom fixed-top" id="mainNav">
                  <!-- <a class="navbar-brand"  href="#">FixOption</a> -->
                  {{-- <a title="home" href="/"><img src="../assets/img/logo-fix.png"  class="logo" alt=""></a> --}}
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
                            <!-- <li class="nav-item">
                            <select class="btn btn-primary p-1 my-1 dropdown-toggle" aria-labelledby="dropdownMenuButton" name="cars" id="cars">
                                <option value="volvo"><a href="">Volvo </a></option>
                                <option value="volvo"><a href="">Volvo </a></option>
                                <option value="volvo"><a href="">Volvo </a></option>
                                <option value="volvo"><a href="">Volvo </a></option>
                            </select>
                            </li> -->
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
            </div>

            <div class="container">
                @yield('content')
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            -->
          </body>
        </html>
