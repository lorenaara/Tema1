<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <?php
        $es="Hola mundo";
        $en="Hello word";
        $de="Hello Welt";
        $idioma =$_GET['pais'];
        echo "${$idioma}";
    ?>
</body>
</html>