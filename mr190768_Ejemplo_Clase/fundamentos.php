<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos</title>
</head>
<body>
    <?php

    $name="Gerson Adonai";
    $edad=24;
    $lname="Martinez Ramirez";
    echo "Hola $name tiene $edad años<br>";
    echo ' Mi nombre completo es '.$name.' '.$lname.'<br>';
    //coercion de tipos
    $numero=5;
    $numero2="5";
    var_dump($numero==$numero2);// los iguales "==" solo verifican valor 
    var_dump($numero===$numero2);//EL "===" verifica valor y tipo

    //casting explicito
    $numero3=(int)$numero2;
    var_dump($numero===$numero3);

    ?>
</body>
</html>