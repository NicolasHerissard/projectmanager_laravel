<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
<div class="container">
    <h1>Accueil</h1>

    <button><a href="{{ route('users.index') }}">Utilisateur</a></button>
    <button><a href="{{ route('project.index')}}">Projet</a></button>
    <button><a href="{{ route('teams.index') }}">Teams</a></button>
    <button><a href="{{ route('tasks.index') }}">Taches</a></button>
</div>
</body>
<style>
    .container {
        display: grid;
        grid-gap: 40px;
        padding: 10px 50px;
    }

    a {
        text-decoration: none;
        color: #000000;
        font-size: 20px;
    }

    button {
        height: 70px;
        width: 250px;
        border-radius: 10px;
        border: 1px solid;
        transition: background 0.5s, transform 0.5s;
        background-color: #ffffff;
        cursor: pointer;
    }

    button:hover {
        background: #ff004f;
        transform: translateY(-10px);
    }
</style>
</html>
