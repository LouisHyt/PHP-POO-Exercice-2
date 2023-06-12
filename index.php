<?php

spl_autoload_register(function ($class) {
    include $class . '.class.php';
});



$John = new Titulaire("Doe", "John", "1986-06-15", "Londres", []);
$compte1 = new Compte("Livret A", 500, "£", $John);
$compte2 = new Compte("Compte Courant", 45, "£", $John);

$Alicia = new Titulaire("Franck", "Alicia", "2001-02-23", "Paris", []);
$compte3 = new Compte("Compte Épargne", 14650, "€", $Alicia);
$compte4 = new Compte("Livret A", 950.48, "€", $Alicia);


var_dump($Alicia->getComptes())





?>