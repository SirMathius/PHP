<?php

// $amigo = array('telefono' => 234123, 'edad' => 20, 'pais' => 'mexico');

$semana = array(
    'lunes', 'martes', 'miercoles',
    'jueves', 'viernes', 'sabado', 'domingo'
);

// extract($amigo);
// echo $edad;
/*
$ultimo_dia = array_pop($semana);

foreach ($semana as $dia) {
    echo $dia . '<br />';
}
*/
// echo $ultimo_dia

// echo join(' - ', $semana);

// echo count($semana);

// sort($semana);
// echo join(', ', $semana);
 
$semana_reverse = array_reverse($semana);
echo join(', ', $semana);

?>