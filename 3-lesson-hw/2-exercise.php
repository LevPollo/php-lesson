<?php


$year = getdate(time());
function whatYear(int $year){
    return ((($year % 4 === 0) && ($year % 100 !== 0)) || ($year % 400 == 0))? "leap" : "is not leap";

}

print_r(whatYear($year['year']));











