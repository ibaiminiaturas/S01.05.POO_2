<?php

require_once 'TwoSidedShape.php';

class Rectangle extends TwoSidedShape {

    public function area(): float{
        return ($this->width * $this->height);
    }

}
?>