<?php

abstract class Animal{
    protected $name;
    
    public function __consrtruct(string $name){
        $this->name = $name;
    }

    abstract public function makeSound(): string;   
}

?>