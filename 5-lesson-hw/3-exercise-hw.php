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
        'passChangeDate' => '5-1-2022',
        'pass' => 'old-pass',
    ],
    [
        'name' => 'Lisa',
        'age' => 15,
        'passChangeDate' => '20-5-2022',
        'pass' => 'old-pass',
    ],
];


function passUpdate(array &$users, $countDay)
{
    $randNums = '1234567890';
    $randAbc = 'qwertyuiopasdfghjklzxcvbnm';
    $randSumb = '!@#$%^&*()_+~{}[]":?><;-=';
    $newPass = '';


    foreach ($users as &$user) {


        $timeDifference = (time() - strtotime($user['passChangeDate'])) / (60 * 60 * 24);
        //при разнице больше нужного числа месяцев, меняем пароль по ссылке
        if ($timeDifference > $countDay) {
            for ($i = 0; $i < 2; $i++) {
                $newPass .= $randNums[rand(0, strlen($randNums) - 1)] . $randAbc[rand(0, strlen($randAbc) - 1)] . $randSumb[rand(0, strlen($randSumb) - 1)] . strtoupper($randAbc[rand(0, strlen($randAbc) - 1)]);
            }
            $user['pass'] = str_shuffle($newPass);
            $newPass = '';
        }

    }

}

passUpdate($users, 90);
foreach ($users as $user) {
    print_r($user);

}
