<?php 

require_once 'Shape.php';

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

?>