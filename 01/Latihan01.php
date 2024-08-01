<?php

$isRaining = false;

$message = !$isRaining ? "Cuaca saat ini cerah"  : "Hari ini hujan, bawa payung";

echo $message . PHP_EOL;

$gender = "Laki-laki" . PHP_EOL;

$hi = $gender == "Laki-laki" ? "Hi Bro!" : "Hi Sis!";
echo $hi . PHP_EOL;

$isMember = true;
$discount = $isMember ? 0.2 : 0;
echo "Anda mendapatkan diskon sebesar " . ($discount * 100) . "%" . PHP_EOL;



$name = "";

if ($name) {
    echo "Halo $name" . PHP_EOL;
} else {
    echo "Nama masih kosong" . PHP_EOL;
}


// ## 1
$firstName = "Budi";
$lastName = "Oey";
$age = 10;
$isMarried = false;

if ($isMarried) {
    echo "Nama saya $firstName $lastName, saya sudah menikah" . PHP_EOL;
} else {
    echo "Nama saya $firstName $lastName, saya belum menikah" . PHP_EOL;
}

## 2
function CheckScore(int $value): string
{
    if ($value >= 90) {
        $result = "Selamat! anda mendapakan nilai A";
    } else if ($value >= 80) {
        $result = "Anda mendapatkan nilai B.";
    } else if ($value >= 70) {
        $result = "Anda mendapatkan nilai C.";
    } else if ($value >= 60) {
        $result = "Anda mendapatkan nilai D.";
    } else {
        $result = "Anda mendapatkan nilai E.";
    }

    return $result;
}

echo CheckScore(90);
