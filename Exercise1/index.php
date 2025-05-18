
<!--Sprint 1. Chapter 5. Exercise 1

Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”-->

<?php

abstract class Animal{
    protected $name;
    
    public function __consrtruct($name){
        $this->name = $name;
    }

    abstract public function makeSound(): string;   
}

class Dog extends Animal{
    public function makeSound(): string
    {
        return "Bup, bup!";
    }
}

class Cat extends Animal{
    public function makeSound(): string
    {
        return "Meuuuu!";
    }
}


$dog1 = new Dog("Perrete");
$cat1 = new Cat("Gatete");

echo $dog1->makeSound() . PHP_EOL;
echo $cat1->makeSound() . PHP_EOL;

?>