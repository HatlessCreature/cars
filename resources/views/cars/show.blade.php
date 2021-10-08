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


<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Cars
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach($cars as $car)
        <li>
            <a class="dropdown-item" href="{{route('car', ['car' => $car->id])}}">
                {{ $car->title  }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection