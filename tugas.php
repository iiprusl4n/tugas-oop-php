<?php

class Person {
    public $firstName;
    public $lastName;

    public function sayHello($name){
        return "Hello $name, nama saya {$this->firstName} {$this->lastName}";
    }

    public function sayGoodBye($name){
        return "Good Bye $name, dari {$this->firstName}";
    }
}

// membuat object
$eko = new Person();
$eko->firstName = "Eko";
$eko->lastName = "Eko";

$joko = new Person();
$joko->firstName = "Joko";
$joko->lastName = "Nugroho";

$budi = new Person();
$budi->firstName = "Budi";
$budi->lastName = "Nugraha";

// menampilkan hasil
echo $eko->sayHello("Budi");
echo "<br>";
echo $joko->sayHello("Eko");
echo "<br>";
echo $budi->sayGoodBye("Joko");

?>