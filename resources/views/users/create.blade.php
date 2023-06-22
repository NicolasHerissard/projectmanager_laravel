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

<h1>Users création</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <label for="name">Nom</label>
    <input id="name" type="text" name="name">
    <label for="email">Email</label>
    <input id="email" type="email" name="email">
    <label for="password">Mot de passe</label>
    <input id="password" type="password" name="password">
    <button type="submit">Enregistrer</button>
</form>

</body>
</html>
