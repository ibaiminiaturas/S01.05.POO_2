<?php   
namespace Level2Exercise1;
/*Sprint 1. Chapter 5. Nivel 2. Exercise 1
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

Important

Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del tema POO2.

*/


abstract class Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function area(): float;
}

class Triangle extends Shape{

    public function area(): float
    {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape{

    public function area(): float
    {
        return ($this->width * $this->height);
    }
}


$rect1 = new Rectangle(4, 8);
$triangle1 = new Triangle(8, 4);

echo "El area del rectangulo es: " . $rect1->area() . PHP_EOL;
echo "El area del Triangulo es: " . $triangle1->area() . PHP_EOL;


?>

