<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;


class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        $cars = Car::all();
        return view('cars.show', compact('car', 'cars'));
    }
}
