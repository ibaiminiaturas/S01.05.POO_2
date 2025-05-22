<?php
namespace Nivel3\Exercise1;
/*Sprint 1. Chapter 5. Nivel 3. Exercise 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.

*/

require_once 'Rectangle.php';
require_once 'Triangle.php';
require_once 'Circle.php';

$rect1 = new Rectangle([5, 10]);
$triangle1 = new Triangle([10, 5]);
$circle1 = new Circle([5]);

echo "El area del rectangulo es: " . $rect1->area() . PHP_EOL;
echo "El area del Triangulo es: " . $triangle1->area() . PHP_EOL;
echo "El area del Circulo es: " . $circle1->area() . PHP_EOL;
?>