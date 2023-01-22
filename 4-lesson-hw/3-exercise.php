<?php
//массив из разрешений
//сверить переменную с эл массива на соответсвие

$arr = ['.png','.png','.jpg','.jpeg'];
$img = 'pepega.png';

function checkFormat(string $img, $perArray){
    return (in_array(strchr($img,'.'),$perArray)) ? $img ." - format allowed" : $img." - format mismatch";
}

print_r(checkFormat($img,$arr));