<?php

$datos = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23 ,"ciudad" => "Barcelona");

foreach( $datos as $valor){
    echo $valor." ,";
    }
echo "<h1> Ejercicio 1 </h1>";
    
$counter=1;
foreach ($datos as $value){
    echo "Dato " .$counter ."º:" .$value ."<br>";
    $counter++;
}

echo "<h1> Ejercicio 2 </h1>";

foreach ($datos as $key => $value) {
    echo " $key: $value <br>";
};

echo "<h1> Ejercicio 3 </h1>";

$datos["edad"] = 24;

$counter=1;

foreach ($datos as $value){
    echo "Dato " .$counter ."º:" .$value ."<br>";
    $counter++;
}

echo "<h1> Ejercicio 4 </h1>";

unset($datos["ciudad"]);

var_dump($datos);


echo "<h1> Ejercicio 5 </h1>";

$letters = "a,b,c,d,e,f";

$letras = explode(",", $letters);

rsort($letras);

$counter1 = 6;

foreach ($letras as $value){
    echo "letter " .$counter1 ."º:" .$value ."<br>";
    $counter1--;
}

echo "<h1> Ejercicio 6 </h1>";

echo"Notas de los estudiantes:";
$notas = array(
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

// sort($notas);
asort($notas);
foreach ($notas as $key => $value) {
    echo" $key: $value ";
}

echo "<h1> Ejercicio 7 </h1>";

echo "Media de las notas: ";
$promedio = array_sum($notas)/count($notas);
echo $promedio ."<br>";

echo "Alumnos con nota por encima de la media:<br>";
?>