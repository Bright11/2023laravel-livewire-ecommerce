<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("register") }}" method="post">
        @csrf
        <input type="text" name="username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>Save</button>
    </form>
</body>
</html>
