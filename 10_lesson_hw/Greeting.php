<?php

namespace domains;
abstract class Greeting
{
    public string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function hello();
}