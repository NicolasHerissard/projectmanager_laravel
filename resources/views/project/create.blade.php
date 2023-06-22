<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../example-app/resources/css/project/create.css">
    <title>{{ $title }}</title>
</head>
<body>
<h1>Projet création</h1>
<form action="{{ route('project.store') }}" method="post">
    @csrf
    <label for="name">Nom</label>
    <input id="name" type="text" name="name">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <label for="deadline">Date de fin</label>
    <input id="deadline" type="date" name="deadline">
    <button type="submit">Enregistrer</button>
</form>
</body>
</html>
