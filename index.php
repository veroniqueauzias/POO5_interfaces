<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Skateboard.php';

// POO5
echo 'CAR <br>';

$mycar = new car('red', 5, 'electric');
echo 'switch On : ';
$mycar ->switchOn();
echo $mycar->islight();
echo 'switch Off : ';
$mycar->switchOff();
echo $mycar->islight();
echo '<br>';

echo 'BIKE<br>';

echo 'speed 20km/h : ';
$myBike = new Bicycle('blue', 1);
$myBike->setCurrentSpeed(20);
$myBike->switchOn();
echo $myBike->islight();

echo 'speed 7km/h : ';
$myOtherBike = new Bicycle('red', 1);
$myOtherBike->setCurrentSpeed(7);
$myOtherBike->switchOn();
echo $myOtherBike->islight();
echo '<br>';

echo 'SKATE<br>';

$mySkate = new Skateboard('pink', 1, 2 );
echo $mySkate->switchOn();