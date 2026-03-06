<?php

class Car {
    public $name;
    public $brand;

    public function startEngine(){
        return "Mobil {$this->name} dari {$this->brand} menyalakan mesin.";
    }

    public function stopEngine(){
        return "Mobil {$this->name} dari {$this->brand} mematikan mesin.";
    }
}

// membuat object
$avanza = new Car();
$avanza->name = "Avanza";
$avanza->brand = "Toyota";

$almaz = new Car();
$almaz->name = "Almaz";
$almaz->brand = "Wuling";

$mobilio = new Car();
$mobilio->name = "Mobilio";
$mobilio->brand = "Honda";

// menampilkan hasil
echo $avanza->startEngine();
echo "<br>";
echo $almaz->startEngine();
echo "<br>";
echo $mobilio->stopEngine();

?>