<?php

namespace App;

class CarFactory
{
    public static function create($make, $model, $year)
    {
        return new Car($make, $model, $year);
    }

    public static function destroy(Car $car)
    {
        var_dump('Car ' . $car->getMake() . ' was destroyed');

        return null;
    }
}