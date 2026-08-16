<?php
$routes = [
    // Početna stranica → lista automobila
    '' => ['controller' => 'CarController', 'method' => 'index'],

    // Automobili
    'cars' => ['controller' => 'CarController', 'method' => 'index'],
    'car/add' => ['controller' => 'CarController', 'method' => 'add'],
    'car/update' => ['controller' => 'CarController', 'method' => 'update'],
    'car/delete' => ['controller' => 'CarController', 'method' => 'delete'],
    'car/id' => ['controller' => 'CarController', 'method' => 'carById'],

    // Rezervacije
    'reservations' => ['controller' => 'ReservationController', 'method' => 'index'],
    'reservation/add' => ['controller' => 'ReservationController', 'method' => 'add'],
    'reservation/update' => ['controller' => 'ReservationController', 'method' => 'update'],
    'reservation/delete' => ['controller' => 'ReservationController', 'method' => 'delete'],
    'reservation/id' => ['controller' => 'ReservationController', 'method' => 'reservationById'],

    // Korisnici
    'user/login' => ['controller' => 'UserController', 'method' => 'login'],
    'user/register' => ['controller' => 'UserController', 'method' => 'register'],
    'user/profile' => ['controller' => 'UserController', 'method' => 'profile'],
    'user/update' => ['controller' => 'UserController', 'method' => 'update'],
    'user/delete' => ['controller' => 'UserController', 'method' => 'delete'],
];
