<?php
//определить кто вы по восточному календарю без ARRAY и IF-ELSE

$year = 1994;

function beastDeterminer(int $year){
    $uBeast = 'none';
    $play = false;
   do{
        switch ($year){
            case 1900:
                $uBeast = 'rat';
                $play = true;
                break;
            case 1901:
                $uBeast = 'bull';
                $play = true;
                break;
            case 1902:
                $uBeast = 'tiger';
                $play = true;
                break;
            case 1903:
                $uBeast = 'rabbit';
                $play = true;
                break;
            case 1904:
                $uBeast = 'dragon';
                $play = true;
                break;
            case 1905:
                $uBeast = 'snake';
                $play = true;
                break;
            case 1906:
                $uBeast = 'horse';
                $play = true;
                break;
            case 1907:
                $uBeast = 'goat';
                $play = true;
                break;
            case 1908:
                $uBeast = 'monkey';
                $play = true;
                break;
            case 1909:
                $uBeast = 'kfc';
                $play = true;
                break;
            case 1910:
                $uBeast = 'dog';
                $play = true;
                break;
            case 1911:
                $uBeast = 'peppa';
                $play = true;
                break;
            default:
                $uBeast = 'none';
                $year -= 12;
                break;
        }

    }while(!$play);
    return $uBeast;
}

print_r(beastDeterminer($year));