<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Maju Siregar";
$person->address = "Bintaro sektor 7";
$person->country = "Indonesia";

echo "Name :  $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

echo "<hr/>";
$person->info();
