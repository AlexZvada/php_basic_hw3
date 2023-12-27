<?php

$intNumber = 5;
$floatNumber = 5.0;
$secondIntNumber = 2;
$secondFloatNumber = 5.4;
$string = "some string";
$stringNumber = '5';
$bollean = false;
$null = NULL;


var_dump($intNumber == $floatNumber);
var_dump($intNumber === $floatNumber);

var_dump($intNumber == $stringNumber);
var_dump($intNumber === $stringNumber);

var_dump($bollean == $null);
var_dump($bollean === $null);

var_dump((int) $stringNumber === $intNumber);
var_dump((float) $intNumber === $floatNumber);
var_dump($bollean === $null);

var_dump($intNumber < $secondIntNumber);
var_dump($intNumber > $secondFloatNumber);
var_dump($intNumber >= $floatNumber);
var_dump($intNumber <= $floatNumber);
var_dump($intNumber <=> $floatNumber);



