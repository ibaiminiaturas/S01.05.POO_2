<?php
namespace Nivel3\Exercise1;
require_once 'Shape.php';

class Rectangle implements Shape
{
    protected $width;
    protected $height;

    public function __construct($data)
    {
        $this->width = $data[0];
        $this->height = $data[1];
    }
    public function area(): float
    {
        return ($this->width * $this->height);
    }

}
?>