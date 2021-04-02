<?php
class Animal {
    public $legs = 2;
    public $name;
    public $cold_bloded = "no";
    public function __construct($name) {
        $this -> name = $name;
    }

}

class Ape extends Animal {
    public $name;

    public function yell() {
        echo "Auoooo";
    }
}

class Frog extends Animal {
    public $name;

    public function jump() {
        echo "hop hop";
    }
}

$sheep = new Animal("shaun");
$sheep -> legs = 4;
echo "name : ". $sheep -> name;
echo "<br>";
echo "legs : ". $sheep -> legs;
echo "<br>";
echo "cold bloded : ". $sheep -> cold_bloded;
echo "<br>";
echo "<br>";

$sungokong = new Ape("Kera Sakti");
echo "name : ". $sungokong -> name;
echo "<br>";
echo "legs : ". $sungokong -> legs;
echo "<br>";
echo "cold bloded : ". $sungokong -> cold_bloded;
echo "<br>";
echo "Yell : ";
echo $sungokong -> yell();
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
$kodok -> legs = 4;
echo "name : ". $kodok -> name;
echo "<br>";
echo "legs : ". $kodok -> legs;
echo "<br>";
echo "cold bloded : ". $kodok -> cold_bloded;
echo "<br>";
echo "Jump : ";
echo $kodok -> jump();

?>