<?php

//true и false в str, чтобы в консоли было лучше видно (для провреки), т.к при false(0) - ""  -->
// < -- представь что они без ковычек))



$randomNumber = rand(1, 100);
function evenNumber($someNumber)
{
    if ($someNumber % 2 === 0) {
        return "true";
    } else {
        return "false";
    }
}

function evenNumberTer($someNumber)
{
    return ($someNumber % 2 == 0) ? "true" : "false";
}
print_r($randomNumber . " is " . evenNumber($randomNumber )."\n");
print_r($randomNumber . " is " . evenNumberTer($randomNumber) . "\n");

