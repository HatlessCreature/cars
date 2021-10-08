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
        <a href="{{route('car', ['car' => $car->id])}}">
            {{ $car->title }}
        </a>
    </li>
    @endforeach
</body>

</html>