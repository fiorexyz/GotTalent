<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--Normalize-->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <title>Superate Got Talent</title>
</head>
<body>
<div class="col-">

    <!-- Encabezado de inicio -->
    <section class="header">
        <nav class="navbar navbar-expand-lg nav">
            <a class="navbar-brand text-light" href="#"><span class="font-weight-bold"> <p>¡Supérate! Got Talent</p></span></a>
            <ul class="navbar-nav align-self-center">
                <menu><li class="nav-item active">
                        
                    </li>
                    <li class="nav-item nav-link">
                        <a href="{{ url('login') }}" class="login"> <button type="button" class="boton">Log in</button>
                        </a>
                    </li>
                </menu>
            </ul>
        </nav>
    </section>

    <section class="container Abuelo" >
        <div class="Card_padre">
            <div class="card">
                <h1>Why?</h1>
                <p class="resumen">To help and support these talented students, we created a web page
                    where we intend to make their talents known. We have included their general information, what
                    they do, and how to contact them.</p>
            </div>
            <div class="card">
                <h1>For what?</h1>
                <p class="resumen"> The main purpose of the web page is to show the students' information, to make use of their talents
                    through the ¡Supérate! program.</p>
                <div class="celular" >
                    <img src="{{ asset('img/index/talentos 2.jpg') }}" class="imagen_celular" alt="">
                </div>
            </div>
        </div>
        <div class="imagen_talento">
            <img src="{{ asset('img/index/talentos 2.jpg') }}" class="img-fluid" alt="img"/>
        </div>
    </section>
    <div class="parrafo">
        <div>
            <h1 class="text-uppercase font-weight-bold mb-4 tittle ">Show your talent!</h1>
        </div>
        <div>
            <p class="parrafito">If you have any type of talent and you want to demostrate it, Log in to share it with others.</div>
        <p class="parrafo2">Categories included in our website:</p>
        <section class="cards">
            <div class="imagenes">
                <img src="{{ asset('img/index/deportes.jpg') }}" alt="">
                <h4>Sports</h4>

            </div>
            <div class="imagenes">
                <img src="{{ asset('img/index/arte.jfif') }}" alt="">
                <h4>Art</h4>
            </div>
            <div class="imagenes">
                <img src="{{ asset('img/index/musica.jfif') }}" alt="">
                <h4>Music</h4>
            </div>
            <div class="imagenes">
                <img src="" alt="">
                <h4>Gastronomy</h4>
            </div>
        </section>

        <div class="autores">
            <h2 class="personas">Autors</h2>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>














        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Comenzar pie de página -->

        <div id= "pie-de-página">
            <footer class="footito"></footer>
        </div>

    </div>
</div>
</body>



</html>
