<?php

namespace domains;
require_once("Greeting.php");
class Programmer extends Greeting
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function hello()
    {
        print_r("Hi there. I'm ".$this->name."and I like my job.\n");
    }
}
