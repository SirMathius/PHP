<?php

// if(condicion){
// instrucciones    
// }

/* Operadores de comparacion:

< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores logicos:

&& - Evalua que se cumplan las 2 condiciones
||, OR - Evalua que se cumpla al menos una condicion
XOR - Evalua que se cumpla solo una condicion

*/

$edad = 17;
$nombre = 'Carlos';

if($edad >= 18 && $nombre == 'Carlos') {
    echo '<h1> Bienvenido </h1>';
}

if($edad < 18 or $nombre != 'Carlos') {
    echo '<h1> Eres menor de edad </h1>';
}

?>