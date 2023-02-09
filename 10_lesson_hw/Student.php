<?php

namespace domains;
require_once("Greeting.php");
class Student extends Greeting
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function hello()
    {
        print_r("Yo. I'm ".$this->name." and I went to sleep at my desk..\n");
    }
}
