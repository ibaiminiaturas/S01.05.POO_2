<?php 

require_once 'Shape.php';

abstract class OneSidedShape extends Shape {

    protected $radious;

    public function __construct($data)
    {
        $this->radious = $data[0];
    }

    abstract public function area(): float;

}

?>