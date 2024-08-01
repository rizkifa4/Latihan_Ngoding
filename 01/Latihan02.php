<?php

// Array
// $user = [
//     "firstName" => "Luke",
//     "lastName" => "Skywalker",
//     "age" => 19,
//     "isJedi" => true,
// ];

// echo $user["firstName"];

$user2 = [
    "firstName" => "Siti",
    "lastName" => "Nurbaya"
];

$grade = [
    "nilai" => 80,
    "grade" => "B",
];

$userSiti = array_merge($user2, $grade);

var_dump($userSiti);



$a = 8;
$b = 4;
echo "Sebelum swap:" . PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Setelah swap:" . PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
