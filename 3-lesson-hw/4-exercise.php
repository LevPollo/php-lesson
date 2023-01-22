<?php

//числительные окончания
function wordEndChanging(int $count, string $fstForm='none',  string $scdForm='none', string $trdForm='none'){
    if($count > 0){
        $count = (string) $count;
        $strLenght = strlen($count) - 1;

        if($count == '1' || $count[$strLenght] == '1' && $count != '11' && $count[$strLenght] == '1' ){
            return $count." ".$fstForm;
        }
        else if($count[$strLenght - 1] !== "1" && (int)($count[$strLenght]) > 1 && $count[$strLenght] == '2' || $count[$strLenght] == '3'  || $count[$strLenght] == '4'){
            return $count." ".$scdForm;
        }
        else{
            return $count." ".$trdForm;
        }
    }
    else{
        return $trdForm." нет в наличии!";
    }

}

print_r(wordEndChanging(1123,"Миксер","Mиксера","Миксеров"));
