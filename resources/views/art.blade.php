<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Frontend Mentor | Profile card component</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>

<div class="firstCard">
    <h3>ART</h3>
</div>

<div class="talents">
    <button>CROCHET</button>
    <button>DRAWING</button>
    <button>PAINTING</button>
    <button>PHOTOGRAPHY</button>
    <button>POETRY</button>
    <button>PERFORMANCE</button>

</div>
@foreach($users as $user)
<x-categoryUser :user="$user"/>
@endforeach
</body>

</html>
