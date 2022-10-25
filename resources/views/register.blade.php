<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">

    <title>Superate Got Talent</title>
</head>

<body>
    <div id="cabecera" class="form">
        <h2>¡Supérate! Got Talent</h2>
    </div>
    <div id="principal" class="seccion">
        <h2>Form</h2>
      <form method="POST" action="{{ url('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="card-content">
                    <h4>Personal information</h4>
                    <p>Name: <input type="text" name="name" /></p>
                    <p>Email Adress<input type="email" name="email" /></p>
                    <p>password: <input type="password" name="password" /></p>
                    <h4>Categories</h4>
                    <select name="sub_category_id" class="form-control" multiple>
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->category->type }} - {{ $sub_category->type }}</option>
                        @endforeach
                    </select>
                    <p>How old are you?</p>
                    <p><select name="age">
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                        </select></p>
                    <h4>Send</h4>
                    <p><input type="submit" value="Enviar" />
                        Send</p>
                    <p><input type="reset" value="Borrar Todo" />
                        Reset</p>
                </div>
            </div>
        </div>
        <div class="vacio"></div>
        </form>
    </div>

    <div id="pie">

    </div>
</body>

</html>
