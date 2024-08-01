<?php

class Animal
{
    private string $name;
    private int $age;
    private bool $isMammal;

    public function __construct(string $nama, int $usia, $isMammal)
    {
        $this->name = $nama;
        $this->age = $usia;
        $this->isMammal = $isMammal;
    }

    public function GetName(): string
    {
        return $this->name;
    }

    public function GetAge(): int
    {
        return $this->age;
    }

    public function IsMammal(): bool
    {
        return $this->isMammal;
    }
}


class Rabbit extends Animal
{
    private string $color;

    public function __construct(string $nama, int $usia, $isMammal, string $warna)
    {
        parent::__construct($nama, $usia, $isMammal);
        $this->color = $warna;
    }

    public function Eat(): string
    {
        return "{$this->GetName()} sedang makan!";
    }
}

class Eagle extends Animal
{
    public function __construct(string $nama, int $usia, $isMammal)
    {
        parent::__construct($nama, $usia, $isMammal);
    }

    public function Fly(): string
    {
        return "{$this->GetName()} sedang terbbang tinggi!";
    }
}

$kelinci = new Rabbit(nama: "Labi", usia: 2, isMammal: true, warna: "Putih");
$elang = new Eagle(nama: "Elo", usia: 4, isMammal: false);

echo $kelinci->Eat() . PHP_EOL;
echo $elang->Fly();
