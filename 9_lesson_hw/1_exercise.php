<?php



use lesson_hw\DateTimeHelper;
require_once('DateTimeHelper.php');


$today = New DateTimeHelper(1, 22);

print_r($today->findBirthDay(1,13)."\n");
print_r($today->findBirthDay(3,15)."\n");
print_r($today->findWorkDay());

