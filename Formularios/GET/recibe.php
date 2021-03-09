<?php
session_start();

if (!$_GET){
    header('location: http://localhost/CapacitacionWeb/PHP/Formularios/GET/EnviarDatosDeFormulario.php');
}

$nombre = $_GET['nombre'];
$Sexo = $_GET['Sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo $nombre . '<br />';
echo $Sexo . '<br />';
echo $year . '<br />';
echo $terminos . '<br />';


?>
    
