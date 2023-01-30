<?

$dir = '/upload/';
$photoArr = [];
$newPhotoName = $_POST['name'];
$f = scandir($_SERVER['DOCUMENT_ROOT'] . $dir);
preg_match('/(.png|.jpg)$/', $_FILES['photo']['name'],$match);
$photoType = $match[0];
$sucCheck = false;


//для себя
foreach ($f as $file){
    // если файл имеет .png добавить массив файлов
    if(preg_match('/(.png|.jpg)$/', $file) ){            
        $photoArr[] = preg_replace('/(\.)\1/','',$file);       
    }
}


// проверка на наличие объектов в массиве файлов
switch(count($photoArr) == 0){
    case true:
        // если их нет, создать
        $sucCheck = true;
    case false:
        // если есть, пройтись по массиву и искать совпадения в названиях
        foreach ($photoArr as $key => $name){    
            if (preg_replace('/(.png|.jpg)$/',"",$name) == $_POST['name']){
                //выводит ошибку совпадения имени
                print_r('A photo with this name already exist');
                //можно конечно и переименовать
                $sucCheck = false; 
                break;
            } 
            else{
                $sucCheck = true;               
            }
        }  
        
}




//проверяем загрузку файла на ошибки и отсутсвие совпадений в списке
if($_FILES['photo']['error'] == 0 && $sucCheck){

    move_uploaded_file($_FILES['photo']['tmp_name'], '../upload/'.preg_replace('/^../' ," ",$newPhotoName).$photoType);
    print_r("Your photo '" . $newPhotoName . "' is uploaded");
}


?>