<?php

require_once "TwoSidedShape.php";

class Triangle extends TwoSidedShape{

    public function area(): float
    {
        return ($this->width * $this->height) / 2;
    }
}
?>