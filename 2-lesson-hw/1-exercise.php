<?php

$day = 18;

function mouthDecadeDefiner($day){

    if($day >= 1 && $day <= 10){

        return 1;
    }
    else if($day >= 11 && $day <= 20){
        return 2;
    }
    else if($day >= 21 && $day <= 31){
        return 3;
    }
    else{
        return 0;
    }
}

mouthDecadeDefiner($day);