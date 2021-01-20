<?php

$alex = array('telefono' => '9654634', 'edad' => 25, 'apellido' => 'FalconMaster', 'pais' => 'Mexico');

echo $alex['edad'] . '<br />';
echo $alex['telefono'] . '<br />';
echo $alex['apellido'] . '<br />';
echo $alex['pais'] . '<br />';

$alex['telefono'] = '123456';
echo $alex['telefono']
?>