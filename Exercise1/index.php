
<!--Sprint 1. Chapter 5. Exercise 1

Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”-->

<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog1 = new Dog("Perrete");
$cat1 = new Cat("Gatete");

echo $dog1->makeSound() . PHP_EOL;
echo $cat1->makeSound() . PHP_EOL;

?>