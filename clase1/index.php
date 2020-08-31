<?php

// $nombre = "holi";

// echo strlen("hOlaaaaa $nombre");

// echo '<br>hOlaaaaa $nombre';

// echo '<br>';
// $array = array(1, 2, 3);
// var_dump($array);



// echo '<br>';
// $array2[0] = 1;
// $array2[1] = 2;
// $array2[2] = '3';
// var_dump($array2);


// echo "Se sumaron $numero numeros<br>, el numero al que se llegó fue $suma";


echo "<br> Ejercicio 6 <br>";


//$array = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));

$array = array();

for($i = 0; $i < 5; $i++){
    $array[$i] = rand(1,10);
}

// $acumulado = 0;

// foreach($array as $value){
//     $acumulado = $acumulado + $value; 
// }
$prom = array_sum($array) / count($array);

if($prom < 6){
    echo "<br>el promedio es $prom y es menor a 6 <br>";
} else if ($prom == 6)
{
    echo "<br>el promedio es $prom y es = a 6 <br>";
} else {
    echo "<br>el promedio es $prom y es mayor a 6 <br>";
}

echo "<br>  <br>";