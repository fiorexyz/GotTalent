<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/perfil2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Perfil</title>

</head>
<body>
<section class="seccion-perfil-usuario">

    <div class="perfil-usuario-header">
        <div class="perfil-usuario-portada">
        </div>
    </div>
    </div>

    <div class="seccion-body">

        <div class="perfil-usuario-bio">
            <div class="img-l">
                <img  class="img" src="{{ asset($user->image) }}" alt="">
                <div class="text">
                    <ul class="lista">
                        <h1 class="titulo">{{ $user->name }}</h1>
                        <h4 class="info">Student´s information:</h4>
                        <li>Student's age: {{ $user->age }}</li>
                        <li>¡Supérate!: {{ $user->superate }}</li>
                        <li>Student's time practicing: 3 years
                        </li>
                        <li>Student's talent: {{ $user->sub_category->type }}</li>

                    </ul>
                    <div>
                        <button class="boton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $user->sub_category->category->type }}
                        </button>
                    </div>
                </div>
            </div>

            <div class="perfil-usuario-motivacion">
                <div>
                    <img src="guitarra.jpg" alt="">
                </div>
                <div>
                    <div class="motivaciones">
                        <h2 class="card-title">More about my talent:</h2>
                        <p class="card-text">{{ $user->about }}</p>

                    </div>
                    @foreach($user->talent_images as $image)
                        <img  class="img" src="{{ asset($image) }}" style="width: 500px !important;"/>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="boton-contactar">
        <button type="button" class="btn btn-secondary btn-lg">Contact</button>
    </div>

</section>
</body>
</html>

