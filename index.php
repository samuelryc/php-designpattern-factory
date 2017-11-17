<?php

require 'vendor/autoload.php';

// Create Car using Factory
$chevrolet = App\CarFactory::create('Chevrolet', 'Optra', '2006');

var_dump($chevrolet->getMake());
var_dump($chevrolet->getModel());
var_dump($chevrolet->getYear());

// Destroy Car using Factory
$chevrolet = App\CarFactory::destroy($chevrolet);

var_dump($chevrolet);