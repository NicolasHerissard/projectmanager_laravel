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
    <h1>Users</h1>

    <a class="mt-6" href="{{ route('users.create') }}">Créer un utilisateur</a>
    <table class="mt-6">
        <thead>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Email</td>
            <td>Mot de passe</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
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
