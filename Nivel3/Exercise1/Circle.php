<?php
namespace Nivel3\Exercise1;
require_once 'Shape.php';

class Circle implements Shape
{
    protected $radious;

    public function __construct($data)
    {
        $this->radious = $data[0];
    }
    public function area(): float
    {
        return pi() * pow($this->radious, 2);
    }
}

?>