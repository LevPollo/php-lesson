<?php
//если выходной - сегодня магазин закрыт
//если будний день - сколько до открытия/закратия/закрыт


function openPlaceController(string $placeName = "Store", int $since = 9, int $until = 22)
{

    $nowDate = getdate(time());

    //псевдо дата для теста функции
    $nowDate['wday'] = 4;
    $nowDate['hours'] = 8;
    $nowDate['minutes'] = 22;


    // выводит сколько сейчас псевдо-времени для теста
    print_r($nowDate['weekday'] . " " . $nowDate['hours'] . ":" . $nowDate['minutes'] . "\n");

    //можно бы сюда добавить массив и сверять на  совпадение, тогда можно было бы прнимать в функцию любые выходные дни, но я пока не умею .-.
    if (0 < $nowDate['wday'] && $nowDate['wday'] < 6) {
        if ($nowDate['hours'] * 60 < $since * 60) {
            return " Pls wait " . $since - 1 - $nowDate['hours'] . " hours and " . 60 - ($nowDate['minutes'] + 1) .
                " minutes to open the " . $placeName . "!";
        } else if ($nowDate['hours'] * 60 < $until * 60) {
            return $placeName . " closes in  " . $until - 1 - $nowDate['hours'] . " hours and " .
                60 - ($nowDate['minutes'] + 1) . " minutes!";
        } else {
            return ($placeName . " is closing yesterday");
        }
    } else {
        return "Pls stay home";
    }
}

print_r(openPlaceController('KFC'));


