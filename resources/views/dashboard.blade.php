@extends('layouts.base')

@section('content')

<header class="masthead w-100" style="float: right">
    <div class="container">
        <div class="masthead-subheading">Bienvenido a BardaStyle!</div>
        <div class="masthead-heading text-uppercase">Nos alegra tenerte por acá!</div>
        <a class="btn boton3 btn-xl text-uppercase" href="{{url('/login')}}">Registrate para empezar</a>
    </div>
</header>

@endsection


<style scoped>
    /* .boton3 {
      color: white !important;
      font-size: 20px;
      font-weight: 500;
      padding: 0.5em 1.2em;
      background-color: #1971b9 !important;
      border: 2px solid;
      border-color: #1971b9;
      transition: all 0.3s ease;
      position: relative;
    }
    .boton3:hover {
      background:  #1c5a8d !important;
      color: #fff !important;
    }

 */

    header.masthead {
      padding-top: 10.5rem;
      padding-bottom: 6rem;
      text-align: center;
      color: #fff;
      /* background-image: url('http://www.solofondos.com/wp-content/uploads/2016/03/outrun-vaporwave-hd-wallpaper-preview.jpg'); */

      /* background-color:black; */
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center center;
      background-size: cover;
    }
    header.masthead .masthead-subheading {
      font-size: 1.5rem;
      font-style: italic;
      line-height: 1.5rem;
      margin-bottom: 25px;
      font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    header.masthead .masthead-heading {
      font-size: 3.25rem;
      font-weight: 700;
      line-height: 3.25rem;
      margin-bottom: 2rem;
      font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    @media (min-width: 768px) {
      header.masthead {
        padding-top: 17rem;
        padding-bottom: 12.5rem;
      }
      header.masthead .masthead-subheading {
        font-size: 2.25rem;
        font-style: italic;
        line-height: 2.25rem;
        margin-bottom: 2rem;
      }
      header.masthead .masthead-heading {
        font-size: 4.5rem;
        font-weight: 700;
        line-height: 4.5rem;
        margin-bottom: 4rem;
      }
    }
    </style>
