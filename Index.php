<?php

require "Car.php";

/////////////// BACK TO THE FUTURE CARS ////////////////
$theHomerCar = new Car('green', 4, 'water energy');
$canyaneroCar = new Car('rainbow color', 4, 'detritus energy');
$mrPlowCar = new Car('Red', 2, 'water energy');

//$mrPlowCar->startUp();
echo 'Start up: Ready to go ! ' . $mrPlowCar->startUp() . PHP_EOL;
$mrPlowCar->setSpeed(100);
echo 'Mr. Plow Car roll to ' . $mrPlowCar->getSpeed() . ' km/h' . PHP_EOL;
echo $mrPlowCar->brake();
