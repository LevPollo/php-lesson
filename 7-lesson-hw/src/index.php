<?php

//проверить файл на формат
//проверить имя файла на ошибки
//проверить совпадения на похожие имена
//загрузить файл


$dir = '/upload/';
$newFileName = $_POST['name'];
$oldFileName = $_FILES['photo']['name'];


$formatReg = '/\.(jpe?g|png|ico|gif|tiff|webp|eps|svg)$/i';
$nameReg = '/^[a-zA-Z0-9-,]+$/';


//проверка формата
$isValidName = preg_match($nameReg,$newFileName);
//проверка на символы в имени
$isValidFormat = preg_match($formatReg,$oldFileName,$matches);
//запись формата
$format = $matches[0];


//если проверка формата и имени прошла успешна и такого файла нет
if($isValidFormat && $isValidName && !file_exists('..'.$dir.$newFileName.$format)){
    move_uploaded_file($_FILES['photo']['tmp_name'], '..'.$dir.$newFileName.$format);
    echo 'This name is free';
}
else{
    echo "Incorrect value";
}


//P.S. Под новым именем файла я имею ввиду имя файла без расширения, мол то, что будет видеть сам пользователь в галерее своих фоток,
//  Например он сделал фото и её имя автоматом проставляется камерой, чтобы там небыло крокозябр ->
// -> пользователь как бы обзывает фото при загрузке. (я понимаю, что лучше для этого создать класс с отдельной переменной),
// но в этом примере я пытался условно имулировать этот процесс на изученной теме.












?>