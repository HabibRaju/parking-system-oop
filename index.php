<?php

require_once __DIR__ . '/vendor/autoload.php';


$parking = new App\StepOne\Parking(2);

$vehicle1 = new App\StepOne\Vehicle(' Vehicle 1 ');
$vehicle2 = new App\StepOne\Vehicle(' Vehicle 2 ');
$vehicle3 = new App\StepOne\Vehicle(' Vehicle 3 ');

$parking->parkVehicle($vehicle1);
$parking->parkVehicle($vehicle2);
$parking->parkVehicle($vehicle3);



// $parking = new App\StepTwo\Parking();
// $parking_floor_1 = new App\StepTwo\ParkingFloor('floor 1', 7, [
//     App\StepTwo\Car::class, App\StepTwo\Truck::class, 
// ]);
// $parking_floor_2 = new App\StepTwo\ParkingFloor('floor 2', 3, [
//     App\StepTwo\Car::class
// ]);

// // $parking->addFloor($parking_floor_1);
// // $parking->addFloor($parking_floor_2);

// $car1 = new App\StepTwo\Car(' car 1 ');
// $car2 = new App\StepTwo\Car(' car 2 ');
// $truck1 = new App\StepTwo\Truck(' truck 1 ');
// $truck2 = new App\StepTwo\Truck(' truck 2 ');

// $parking_floor_1->parkVehicle($car1);
// $parking_floor_1->parkVehicle($car2);
// $parking_floor_1->parkVehicle($truck1);
// $parking_floor_1->parkVehicle($truck2);

// $parking_floor_2->parkVehicle($car1);
// $parking_floor_2->parkVehicle($truck1);