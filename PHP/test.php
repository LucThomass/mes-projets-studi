<?php
function sayHi(string $firstName = 'John')
{
	//On modifie $firstName pour la mettre en majuscules avec strtoupper
	$firstName = strtoupper($firstName);
	echo 'Bonjour ' . $firstName . ' ! ' . PHP_EOL;
}

$someone = 'Eve';
//Passage par valeur
sayHi($someone);
//La valeur de $someone n'as pas été modifiée
echo $someone;