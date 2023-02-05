<?php
//ввести в консоль название сайта полнсотью
//определить, является ли сайт защищенным

$link = 'https://test.com';

function protectionLinkCheck(string $link)
{
    if (str_starts_with($link, "https")) {
        return true;
    } else {
        return false;
    }
}

print_r(protectionLinkCheck($link));
