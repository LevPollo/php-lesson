<?php
//ввести в консоль название сайта полнсотью
//определить, является ли сайт защищенным

$link = 'https://test.com';

function linkChenger(string $link){
    if (str_starts_with($link,"https")){
        return "is true";
    }
    else{
        return "isn't true";
    }
}

print_r(linkChenger($link));
