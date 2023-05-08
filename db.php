<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Kennel.php';

$animals = [
    new Animal("dog"),
    new Animal("cat")
];

$prodotto = new Product("Catisfactions", "Crocchette", 3, $animals[1]);
$giocattolo = new Toy("Pollo di Gomma", "Giocattolo", 2, $animals[0]);
$cuccia = new Kennel("Cuccia Grande", "Cuccia", 8, $animals[0]);



