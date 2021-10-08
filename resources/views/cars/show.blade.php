<!-- <html>

<head>
    <title>
        {{ $car->title }}
    </title>
</head>

<body>
    <h2>
        {{ $car->title }}
    </h2>
    <p>
        {{ $car->producer }}
    </p>
    <p>
        {{ $car->number_of_doors }}
    </p>

</body>

</html> -->

@extends('layouts.app')

@section('title', $car->title)

@section('content')
<h2>
    {{ $car->title }}
</h2>
<p>
    {{ $car->producer }}
</p>
<p>
    {{ $car->number_of_doors }}
</p>
@endsection