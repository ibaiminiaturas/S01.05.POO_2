<?php

abstract class Animal{
    protected $name;
    
    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    abstract public function makeSound(): string;   
}

?>