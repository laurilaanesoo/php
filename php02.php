<?php

//aritmeetilised operaatorid

/*
	02 - PHP
	Lauri Laanesoo
	Haapsalu Kutsehariduskeskus
	24.01.2023
*/

$x = 8;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;


echo "Liitmine: $x + $y = $liitm";
echo "<br>Lahutamine: $x - $y = $lahut";
echo "<br>Korrutamine: $x * $y = $korru";
echo "<br>Jagamine: $x / $y = $jagam";
echo "<br>Jaak: $x % $y = $jaak";

printf("<br>");

$mm = 2000;
$cent = 10;
$meter = 1000;

$cm = $mm / $cent;
$meters = $mm / $meter;

echo "<br>MM to CM: $mm / $cent = $cm cm";
echo "<br>MM to meters: $mm / $meter = $meters meetrit";

$a = 4;
$b = 5;
$c = 6;
$h = 5;
$umbermoot = $a + $b + $c;
$pindala = $a * $h /2;

echo "<br>Kolmnurga ümbermõõt: $a + $b + $c = $pindala cm";
echo "<br>Kolmunrga pindala: $a x $h : 2 = $pindala cm";
?>
