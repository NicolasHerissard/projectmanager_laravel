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

    <h1>Tache création</h1>

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <label for="name">Nom</label>
        <input id="name" type="text" name="name">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="project_id">Projet</label>
        <input id="project_id" type="text" name="project_id">
        <label for="users_id">Assigné à un utilisateur</label>
        <input id="users_id" type="text" name="users_id">
        <button type="submit">Enregistrer</button>
    </form>

</body>
</html>
