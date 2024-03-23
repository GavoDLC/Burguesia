<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proyecto.css') }}">
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <title>La burguesía</title>
</head>

<body>




<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <!-- Logo y título -->
        <a class="navbar-brand dropdown-center d-flex" href="#">
            <img src="img/logo2-removebg-preview.png" alt="BP La Burguesía del Pueblo" width="80" height="80"
                class="">
            <i class="justify-content-center text-center">
                —La— <br><b>Burguesía</b>  <br> del Pueblo
            </i>
        </a>
        <!-- Botón para colapsar el menú en pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Elementos de navegación -->
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{url('/')}}" style="font-size: 18px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/menu')}}" style="font-size: 18px;">Menú</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/misionvision')}}" style="font-size: 18px;">Visión y Misión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/horarios')}}" style="font-size: 18px;">Horarios</a>
                </li>
            </ul>
            <form action="#">
                <button type="submit" style="background:none; border:none;"><img src="img/carrito.png" width="50" alt="" class="bg-none"></button>
            </form>
        </div>
    </div>
</nav>

<br><br><br><br><br><br>