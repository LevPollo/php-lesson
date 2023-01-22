<?php
// вывести среднюю зарплату отделов

$departments = [
    'developers' => [
        [
            'name' => 'nik',
            'position' => 'developer',
            'salary' => 900
        ],
        [
            'name' => 'sergey',
            'position' => 'developer',
            'salary' => 1200
        ],
        [
            'name' => 'andrey',
            'position' => 'developer',
            'salary' => 1400
        ]
    ],
    'managers' => [
        [
            'name' => 'yulia',
            'position' => 'manager',
            'salary' => 1150
        ],
        [
            'name' => 'darya',
            'position' => 'manager',
            'salary' => 1100
        ],
        [
            'name' => 'viktoria',
            'position' => 'manager',
            'salary' => 1000
        ]
    ],
];


function payDaycounter(array $arr){
    $sumMoney = 0;
    $sumPeople = 0;
    foreach ($arr as $depart) {
        foreach ($depart as $workers){
            foreach ($workers as $key => $value){
                if($key == "salary"){
                    $sumMoney += $value;
                    $sumPeople += 1;
                }
            }
        }
    }
    return $sumMoney / $sumPeople;
}


print_r(payDaycounter($departments));