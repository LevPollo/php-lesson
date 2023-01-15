<?php

//https://www.urya.ru/upload/goods/bg280188708.jpg - правило брал отсюда
function wordEndChanging(int $count, string $fstForm='none',  string $scdForm='none', string $trdForm='none'){
    if($count > 0){
        $count = (string) $count;
        $strLenght = strlen($count) - 1;
        if($count == '1' || $count[$strLenght] == '1' && $count != '11'){
            return $count." ".$fstForm;
        }
        else if($count[$strLenght - 1] != "1" && $count[$strLenght] == '2'|| $count[$strLenght] == '3'|| $count[$strLenght] == '4' ){
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
print_r(wordEndChanging(-1,"Миксер","Mиксера","Миксеров"));
