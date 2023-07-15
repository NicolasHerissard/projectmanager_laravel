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
<div class="container">
    <h1>Taches</h1>

    <a class="mt-6" href="{{ route('tasks.create') }}">Créer une tache</a>
    <table class="mt-6">
        <thead>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Description</td>
            <td>Projet</td>
            <td>Utilisateur assigné</td>
            <td>Créé le</td>
            <td>Modifié le</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->project_id }}</td>
                <td>{{ $task->users_id }}</td>
                <td>{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($task->updated_at)->format('d/m/Y') }}</td>
                <td>
                    <form action="{{ route('tasks.delete', $task->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button id="btnDelete" type="submit" value="Delete">Delete</button>
                    </form>
                    <form action="{{ route('tasks.edit', $task->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button>Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
<style>
    .container {
        padding: 40px 100px;
    }

    table {
        border-collapse: separate;
        border-spacing: 10px;
        font-family: "Arial Rounded MT Bold", sans-serif;
    }
</style>
</html>
