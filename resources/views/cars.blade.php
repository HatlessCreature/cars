<html>

<head>
    <title>
        Cars
    </title>
</head>

<body>
    <h1>Cars</h1>
    @foreach($cars as $car)
    <li>
        {{ $car->title }}
    </li>
    @endforeach
</body>

</html>