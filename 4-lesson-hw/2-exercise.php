<?php

$strnum = '12ws23dSDa!qed23';


function numCheck(string $strnum){
    $arrStrNums = str_split( preg_replace('/[^0-9]/', '', $strnum));
    return count($arrStrNums) . "" . array_sum($arrStrNums);
}

print_r(numCheck($strnum));