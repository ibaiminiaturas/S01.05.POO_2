<?php   
namespace Level3Exercise1;
/*Sprint 1. Chapter 5. Nivel 3. Exercise 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.

*/

abstract class Shape {

    abstract public function __construct($data);

    abstract public function area(): float;
}


class Circle extends Shape{

    private $radius;

    public function __construct($data)
    {
        $this->radius = $data[0];
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

abstract class TwoSidedShape extends Shape {

    protected $width;
    protected $height;

    public function __construct($data)
    {
        $this->width = $data[0];
        $this->height = $data[1];
    }

    abstract public function area(): float;

}

class Rectangle extends TwoSidedShape {

    public function area(): float{
        return ($this->width * $this->height);
    }

}

class Triangle extends TwoSidedShape {

    public function area(): float{
        return ($this->width * $this->height) / 2;
    }

}

$rect1 = new Rectangle([5, 10]);
$triangle1 = new Triangle([10, 5]);
$circle1 = new Circle([5]);

echo "El area del rectangulo es: " . $rect1->area() . PHP_EOL;
echo "El area del Triangulo es: " . $triangle1->area() . PHP_EOL;       
echo "El area del Circulo es: " . $circle1->area() . PHP_EOL;
?>