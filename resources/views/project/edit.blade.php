<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>

    <h1>Project update</h1>

    <form action="{{ route('project.update', $project->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom</label>
        <input id="name" value="{{ $project->name }}" type="text" name="name">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="deadline">Date de fin</label>
        <input id="deadline" value="{{ $project->deadline }}" type="date" name="deadline">
        <button type="submit">Modifier</button>
    </form>

</body>
</html>
