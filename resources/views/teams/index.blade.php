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
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>