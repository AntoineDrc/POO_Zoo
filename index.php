<?php 

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$enclos1 = new Enclos("Savane", 10);

$soigneur1 = new Soigneur("Quentin", "05-06-1998", "Felin");

$animal1 = new Animal("Lion", "12-01-2002", "Bonne", $enclos1 , $soigneur1);


echo $animal1;




?>