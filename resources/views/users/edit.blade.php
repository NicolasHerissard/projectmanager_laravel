<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Users</title>
</head>
<body>

    <h1>Update Users</h1>

    <form action="{{ route('users.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom</label>
        <input id="name" value="{{ $users->name }}" type="text" name="name">
        <label for="email">Email</label>
        <input id="email" value="{{ $users->email }}" type="email" name="email">
        <label for="password">Mot de passe</label>
        <input id="password" value="{{ $users->password }}" type="password" name="password">
        <button type="submit">Modifier</button>
    </form>

</body>
</html>
