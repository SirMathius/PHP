<?php
session_start();
//print_r($_POST);

if ($_POST) {
    $nombre = $_POST['nombre'];
    $Sexo = $_POST['Sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

    echo 'Hola, ' . $nombre . ' eres '. $Sexo;
} else {
    header('location: http://localhost/CapacitacionWeb/PHP/Formularios/EnviarDatosDeFormulario.php');
}

?>