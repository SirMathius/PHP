<?php

$errores = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)) {
        //$nombre = trin($nombre);
       // $nombre = htmlspecialchars($nombre);
        //$nombre = stripslasheds($nombre);

        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo "Tu nombre es: $nombre <br />";
    } else {
        $errores = 'Por favor agrega un nombre';
    }

    echo "Tu nombre es: $nombre <br />";
    echo "Tu correo es: $correo";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>