<?php

/*

//forma correcta

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "se enviaron por GET";
} else {
    echo "se enviaron por POST";
}
*/

if (isset($_POST['submit-form2'])) {
    echo "se han enviado los datos correctamente";
    print_r($_POST['submit-form2']);
}

?>