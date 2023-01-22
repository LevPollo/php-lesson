<?php
// убрать все повторяющиеся символы из строки и вывести их количество

$str = 'Hheelllosddddsssa#1oa';

function dublicateFilter(string $str){
    $arrStrOne = str_split($str);
    $repeatSymbols = 0;
    $newArr = [];
    foreach (array_count_values($arrStrOne)as $item=>$value) {
        if($value > 1){
            $repeatSymbols += $value - 1;
        }
        $newArr[] = $item;
    }
    return implode($newArr)." ".$repeatSymbols;

}


print_r(dublicateFilter($str));