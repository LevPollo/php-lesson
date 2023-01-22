<?php
//валидация пароля 1) Заглавная буква. 2) Спец символ. 3) Больше 8 символов. 4) Минимум 1 буква.
$truePass = 'priveT12!';
$falsePass = 'pepega';

function passCheck($pass){
    $passArr = str_split($pass);
    $abc = 'qwertyuiopasdfghjklzxcvbnm';
    $symb = '!@#$%^&*()_+~{}[]":?><;-=1234567890';
    $arrAbc = str_split($abc);
    $arrSymb = str_split($symb);
    $points = ['letter'=>false,'letterUp'=>false,'symbols'=>false];

    foreach ($passArr as $key) {
        foreach ($arrAbc as $item) {
            ($key == $item) ? $points['letter'] = true:false;
            (($key == strtoupper($item))) ? $points['letterUp'] = true:false;
        }
        foreach ($arrSymb as $item){
            ($key == $item) ? $points['symbols'] = true:false;
        }
    }
    return ($points['letter'] == true && $points['letterUp'] == true && $points['symbols'] == true && count($passArr) > 8);
}

print_r(passCheck($truePass));