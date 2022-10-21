<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Catgories profile card </title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/categories.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>

<div class="firstCard">
    <h3>GASTRONOMY</h3>
</div>

<div class="talents">
    <button>COOKING</button>
    <button>BAKING</button>

</div>
@foreach($users as $user)
<x-categoryUser :user="$user"/>
@endforeach
</body>

</html>
