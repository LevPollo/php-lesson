<?php
//проверить пароль и создать новый если не менялся больше трёх месяцев, заменить пароль
$users = [
    [
        'name' => 'Nick',
        'age' => 23,
        'passChangeDate' => '5-1-2024',
        'pass' => 'old-pass',
    ],
    [
        'name' => 'Alex',
        'age' => 30,
        'passChangeDate' => '5-1-2023',
        'pass' => 'old-pass',
    ],
    [
        'name' => 'Lisa',
        'age' => 15,
        'passChangeDate' => '20-5-2022',
        'pass' => 'old-pass',
    ],
];



function passUpdate(array &$users, $countMonth){
    $randNums  =  '1234567890';
    $randAbc = 'qwertyuiopasdfghjklzxcvbnm';
    $randSumb = '!@#$%^&*()_+~{}[]":?><;-=';
    $newPass = '';

    //для теста
    $thisDate = getdate(time());
    $thisDate['year'] = 2024;
    $thisDate['mon'] = 3;
    $differenceMonth = 0;

    print_r(  $thisDate['year']);
    foreach ($users as &$user) {
        foreach ($user as $key=>&$value){
            if($key == 'passChangeDate'){
                $date = explode('-',$value);
                //если новый год больше

                //если есть разница хотябы в один год
                if($date[2] < $thisDate['year']){
                    $differenceMonth = $thisDate['mon'] + 12 - $date[1];
                }
                //если есть разница в месяцах
                else if ($date[1] < $thisDate['mon']){
                    $differenceMonth = $thisDate['mon'] - $date[1];
                }

                //при разнице больше нужного числа месяцев, меняем пароль по ссылке
                if($differenceMonth >  $countMonth){
                    for($i = 0; $i < 2; $i++){
                        $newPass .= $randNums[rand(0,strlen($randNums)-1)].$randAbc[rand(0,strlen($randAbc)-1)].$randSumb[rand(0,strlen($randSumb)-1)].strtoupper($randAbc[rand(0,strlen($randAbc)-1)]);
                    }
                    $user['pass'] = str_shuffle($newPass);
                    $newPass = '';
                }

            }
        }
    }
}



passUpdate($users,3);
foreach ($users as $user){
    print_r($user);

}
