<?php

abstract class Shape {
    protected $width;
    protected $height;

    public function __construct(int | float $width, int | float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function area(): float;
}


?>