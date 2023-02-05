<?php
//валидация пароля 1) Заглавная буква. 2) Спец символ. 3) Больше 8 символов. 4) Минимум 1 буква.
$truePass = 'priveT12!';
$falsePass = 'pepega';

function passCheck($pass)
{
    $passArr = str_split($pass);
    $abc = 'qwertyuiopasdfghjklzxcvbnm';
    $symb = '!@#$%^&*()_+~{}[]":?><;-=1234567890';

    $isValidLength = false;
    $isValidUpperCase = false;
    $isValidLowerCase = false;
    $isValidSymbol = false;

    foreach ($passArr as $letter) {
        if (str_contains($abc, $letter)) {

            $isValidLowerCase = true;
        }

        if (str_contains($symb, $letter)) {

            $isValidSymbol = true;
        }
        if (str_contains(strtoupper($abc), $letter)) {

            $isValidUpperCase = true;
        }
        if (count($passArr) > 8) {

            $isValidLength = true;
        }

    }


    return ($isValidLength == true && $isValidSymbol == true && $isValidLowerCase == true && $isValidUpperCase == true);
}

print_r(passCheck($truePass));