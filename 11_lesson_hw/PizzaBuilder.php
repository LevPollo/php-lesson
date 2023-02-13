<?php

class PizzaBuilder
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $pineapple;

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function setCheese($cheese)
    {
        $this->cheese = $cheese;
        return $this;
    }

    public function setPepperoni($pepperoni)
    {
        $this->pepperoni = $pepperoni;
        return $this;
    }

    public function setPineapple($pineapple)
    {
        $this->pineapple = $pineapple;
        return $this;
    }

    public function buildPizza()
    {
        return new Pizza($this->size, $this->cheese, $this->pepperoni, $this->pineapple);
    }
}

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $pineapple;


    public function __construct($size, $cheese, $pepperoni, $pineapple)
    {
        $this->size = $size;
        $this->cheese = $cheese;
        $this->pepperoni = $pepperoni;
        $this->pineapple = $pineapple;
        $this->orderPrint();

    }

    public function orderPrint()
    {
        print_r( "Your pizza has {$this->size}sm and cheese:{$this->cheese}, pepperoni: {$this->pepperoni}, pineapple: {$this->pineapple}");
    }
}

$pizzaBuilder = (new PizzaBuilder())->setSize(12)->setCheese("gorgonzola")->setPepperoni(true)->setPineapple(true);
$pizza = $pizzaBuilder->buildPizza();
$pizza->orderPrint();
