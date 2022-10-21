<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/first.css') }}">

    <title>Superate Got Talent</title>
</head>
<body>

<!-- Encabezado de inicio -->
<section class="header">
    <nav class="navbar navbar-expand-lg nav">
        <header>
            <div class="logo">
                @auth
                <div class="boton"><a href="{{ url('profile1') }}"><button type="button" class="boton1">Profile</button></a></div>
                <div class="boton"><a href="{{ url('logout') }}"><button type="button" class="boton1">Logout</button></a></div>
                @endauth
                <div class="navbar-brand"> <p>Superate! Got Talent</p> </div>
            </div>
        </header>
    </nav>
</section>




<div id="carousel_" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="{{ url('art') }}">
                <img class="d-block w-100" src="{{ asset('img/first/1.png') }}" alt="Primer Slide">
            </a>
        </div>
        <div class="carousel-item ">
            <a href="{{ url('sports') }}">
                <img class="d-block w-100" src="{{ asset('img/first/2.png') }}" alt="Segundo Slide">
            </a>
        </div>
        <div class="carousel-item ">
            <a href="{{ url('music') }}">
                <img class="d-block w-100" src="{{ asset('img/first/3.png') }}" alt="Tercer Slide">
            </a>
        </div>
        <div class="carousel-item ">
            <a href="{{ url('gastronomy') }}">
                <img class="d-block w-100" src="{{ asset('img/first/4.png') }}" alt="Cuarto Slide">
            </a>
        </div>

        <a href="#carousel_" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">previous
        </span>
        </a>
        <a href="#carousel_" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
        </span>
            <span class="sr-only">next
        </span>
        </a>

    </div>

    <div class="descripcion">
        <h1>Click on the image with the name of the category you want to see</h1>
    </div>



</div>









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
