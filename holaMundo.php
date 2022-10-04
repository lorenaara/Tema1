<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <h1>Pruebas de php</h1>
    <?php
     echo "<p>Hola Mundo</p>";
     print("<p>Hola Clase</p>");
    echo "<h1>Tipos de Variables</h1>";
     var_dump("Lore"); //te indica el tipo de dato que es 
     var_dump(8);
     var_dump(8.2);
     var_dump(true);
    ?>

    <p><? echo "Hello word"?></p>
    <h1>Variable</h1>
    <?php
        $miVariable= 6;
        var_dump($miVariable);
        $miVariable= "lore";
        var_dump($miVariable);
        $miFloat=3.17;
        var_dump($miFloat);
        $nuevoInt=(int)$miFloat;
        var_dump($nuevoInt);
        
    ?>
</body>
</html>