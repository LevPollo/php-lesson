<?php

$transit  = '1QW1234'; // 1) транзитные, цифра , две английские буквы,четыре цифры
$electro  = 'E1234AA-7'; // 2) электромобили, E , затем 4 цифры,затем две английские буквы, , дефис , и цифра от 0 до 7
$casual = '1234AB-7'; //3) обычные номера , 4 цифры , 2 английские буквы, дефис , цифра от 0 до 7


//я очень плохо в номерах смыслю, по этому сорь T-T
function vertByNumb(string $carNumber){
    $transit = preg_match('/^[0-9][a-zA-Z]{2}[0-9]{4}$/',$carNumber);
    $electro = preg_match('/^E[0-9]{4}[a-zA-Z]{2}-[0-7]$/',$carNumber);
    $casual = preg_match('/^[0-9]{4}[a-zA-Z]{2}-[0-7]$/', $carNumber);

    return ($transit || $electro || $casual);

}

print_r(vertByNumb($casual));