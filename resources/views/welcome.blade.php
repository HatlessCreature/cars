<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->

</head>

<body>
    <h1>Welcome {{$name}}</h1>
    <div>
        I'm {{$age}} years old
    </div>
</body>

</html>