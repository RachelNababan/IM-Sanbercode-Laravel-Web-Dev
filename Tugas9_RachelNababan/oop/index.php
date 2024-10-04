<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Animal instance
$sheep = new Animal("shaun");
echo "Name : " . $sheep->get_name() . "<br>"; // shaun
echo "legs :" .$sheep->get_legs() . "<br>"; // 4
echo "cold blooded : " .$sheep->get_cold_blooded() .  "<br> <br>"; // no



// Frog instance
$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name() . "<br>"; // shaun
echo "legs :" .$kodok->get_legs() . "<br>"; // 4
echo "cold blooded : " .$kodok->get_cold_blooded() .  "<br>"; // no
$kodok->jump(); // hop hop
echo "<br> <br>";

// Ape instance
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->get_name() . "<br>"; // shaun
echo "legs :" .$sungokong->get_legs() . "<br>"; // 4
echo "cold blooded : " .$sungokong->get_cold_blooded() .  "<br>"; // no
$sungokong->yell(); // Auooo


?>
