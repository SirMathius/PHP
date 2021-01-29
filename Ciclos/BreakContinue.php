<?php

$paises = array(
    'Argentina', 'España', 'Mexico', 'Brazil',
    'Chile', 'Guatemala', 'Ecuador'
);

//foreach ($paises as $pais) {
//    echo $pais . '<br />';
//
//    if ($pais == 'España') {
//        
//    }
//}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Paises Latinoamericanos</h1>
    <?php

        foreach ($paises as $pais) {
            
            if ($pais == 'España') {
                continue;
            }
    
            echo $pais . '<br />';
        }

    ?>

</body>