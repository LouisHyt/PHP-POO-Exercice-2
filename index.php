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

echo($compte1);
echo($compte3);

$compte1->transfer($compte3 , 50);
echo("<br /><strong>TRANSFERT</strong><br /><br />");

echo($compte1);
echo($compte3);
$John->removeCompte($compte2);
echo("<br /><strong>Suppression du compte 2 de John</strong><br /><br />");
echo($John);
echo("<br /><br /><strong>Ajout de 78.45€ sur le compte 4</strong><br /><br />");
$compte4->crediter(78.45);
echo($compte4);

?>