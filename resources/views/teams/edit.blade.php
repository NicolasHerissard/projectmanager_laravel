<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Teams</title>
</head>
<body>

    <h1>Teams Update</h1>

    <form action="{{ route('teams.update', $teams->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom</label>
        <input id="name" value="{{ $teams->name }}" type="text" name="name">
        <label for="project_id">Projet</label>
        <input id="project_id" value="{{ $teams->project_id }}" type="text" name="project_id">
        <button type="submit">Modifier</button>
    </form>

</body>
</html>
