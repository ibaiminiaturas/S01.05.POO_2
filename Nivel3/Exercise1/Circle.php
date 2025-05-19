<?php
require_once 'OneSidedShape.php';

class Circle extends OneSidedShape{

    public function area(): float
    {
        return pi() * pow($this->radious, 2);
    }
}

?>