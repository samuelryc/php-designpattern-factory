<?php

namespace App;

class Car implements CarContract
{
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) 
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }
}