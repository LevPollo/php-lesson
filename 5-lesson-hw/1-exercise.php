<?php
//определить кто вы по восточному календарю без ARRAY и IF-ELSE

$year = 1994;

function beastDeterminer(int $year)
{
    $uBeast = 'none';
    $play = false;
    do {
        switch ($year % 12) {
            case 4:
                $uBeast = 'rat';
                $play = true;
                break;
            case 5:
                $uBeast = 'bull';
                $play = true;
                break;
            case 6:
                $uBeast = 'tiger';
                $play = true;
                break;
            case 7:
                $uBeast = 'rabbit';
                $play = true;
                break;
            case 8:
                $uBeast = 'dragon';
                $play = true;
                break;
            case 9:
                $uBeast = 'snake';
                $play = true;
                break;
            case 10:
                $uBeast = 'horse';
                $play = true;
                break;
            case 11:
                $uBeast = 'goat';
                $play = true;
                break;
            case 0:
                $uBeast = 'monkey';
                $play = true;
                break;
            case 1:
                $uBeast = 'kfc';
                $play = true;
                break;
            case 2:
                $uBeast = 'dog';
                $play = true;
                break;
            case 3:
                $uBeast = 'peppa';
                $play = true;
                break;

        }

    } while (!$play);
    return $uBeast;
}

print_r(beastDeterminer($year));