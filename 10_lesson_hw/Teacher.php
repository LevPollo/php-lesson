<?php

namespace domains;
require_once("Greeting.php");
class Teacher extends Greeting
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function hello()
    {
        print_r("Hello, I'm ".$this->name."! Please have a seat.\n");
    }
}
