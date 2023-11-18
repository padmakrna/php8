<?php

echo "<h2>Bilangan Ganjil - Increment</h2>";
//bilangan ganjil
$a = 1;
do {
    echo "$a. ProWeb <br>";
    $a+=2; //bisa ditulis $a= $a+2
} while ($a <= 20);

echo "<hr>";

echo "<h2>Bilangan Genap - Decrement </h2>";
//bilangan genap
$a = 20;
do {
    echo "$a. ProWeb <br>";
    $a-=2; //bisa ditulis $a= $a-2
} while ($a >= 2);