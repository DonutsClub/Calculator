<?php

$n = 5;

$array = array();

echo($array);

for ($i = 1; $i <= $n; $i++)
{
    $number =  rand(0, 10000);
    array_push($array,  $number);
    print_r($array);

}

?>