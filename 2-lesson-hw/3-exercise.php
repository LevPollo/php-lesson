<?php
$year = 2024;
function whatYear(int $year){
    return ((($year % 4 === 0) && ($year % 100 !== 0)) || ($year % 400 == 0))? "leap" : "is not leap";
}

print_r(whatYear(1996));