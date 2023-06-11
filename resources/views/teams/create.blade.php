<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

    <h1>Teams création</h1>

    <form action="{{ route('teams.store') }}" method="post">
        @csrf
        <label for="name">Nom</label>
        <input id="name" type="text" name="name">
        <label for="project_id">Projet</label>
        <input id="project_id" type="text" name="project_id">
        <button type="submit">Enregistrer</button>
    </form>

</body>
</html>
