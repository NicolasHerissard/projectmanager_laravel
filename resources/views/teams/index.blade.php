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
    <h1>Teams</h1>

    <a class="mt-6" href="{{ route('teams.create') }}">Créer une team</a>
    <table class="mt-6">
        <thead>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Projet</td>
            <td>Créé le</td>
            <td>Modifié le</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->project_id }}</td>
                <td>{{ \Carbon\Carbon::parse($team->created_at)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($team->updated_at)->format('d/m/Y') }}</td>
                <td>
                    <form action="{{ route('teams.delete', $team->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    <form action="{{ route('teams.edit', $team->id) }}" method="post">
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
