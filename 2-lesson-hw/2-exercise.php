<?php


function multipleChecker(int $number){
        return ($number ** 6) % 5 === 0? $number : 'not a multiple' ;
}


print_r(multipleChecker(5));