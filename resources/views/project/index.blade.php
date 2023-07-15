<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../example-app/resources/css/project/index.css">
    <title>{{ $title }}</title>
</head>
<body>
<div class="container">
    <h1>Projets</h1>
    <button id="btnCreate"><a class="mt-6" href="{{ route('project.create') }}">Créer un projet</a></button>
    <table class="mt-6">
        <thead>
        <tr>
            <td>Nom</td>
            <td>Description</td>
            <td>Date de fin</td>
            <td>Créé le</td>
            <td>Modifié le</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($project as $projects)
            <tr>
                <td>{{ $projects->name }}</td>
                <td>{{ $projects->description }}</td>
                <td>{{ \Carbon\Carbon::parse($projects->deadline)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($projects->created_at)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($projects->updated_at)->format('d/m/Y') }}</td>
                <td>
                    <form action="{{ route('project.delete', $projects->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button id="btnDelete" type="submit" value="Delete">Delete</button>
                    </form>
                    <form action="{{ route('project.edit', [$projects->id]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <button id="btnEdit">Edit</button>
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

    div a {
        text-decoration: none;
        color: #000000;
    }

    div #btnCreate {
        border-radius: 5px;
        border: 1px solid;
        height: 40px;
        width: 150px;
        margin-bottom: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    #btnDelete {
        margin-bottom: 10px;
        height: 30px;
        width: 70px;
    }

    #btnEdit {
        height: 30px;
        width: 70px;
    }

</style>
</html>
