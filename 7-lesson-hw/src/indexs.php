<?
($_POST['count'] == "")? $count = 0 : $count = $_POST['count'];

$oneC = $_POST['currencyOne'];
$twoC = $_POST['currencyTwo'];


$currencyArr = [
    'usd' => ['usd'=>1,'eur'=>0.92,'byn'=>2.53],
    'eur' => ['usd'=>1.08,'eur'=>1,'byn'=>2.74],
    'byn' => ['usd'=>0.4,'eur'=>0.36,'byn'=>1]
];


$itogo = $currencyArr[$oneC][$twoC] * $count;
print_r((float)$itogo);



?>