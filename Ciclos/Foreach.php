<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$alejandro = array('telfono' => 1122552244, 'edad' => 20, 'pais' => 'argentina');

?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <title>document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php
            //foreach ($meses as $mes) {
            //    echo '<li>' . $mes . '</li>';
            //}

            foreach ($alejandro as $dato => $value) {
                echo '<li>' . $dato . ' : ' . $value . '</li>';
            }

        ?>
    </ul>
</body>
</html>