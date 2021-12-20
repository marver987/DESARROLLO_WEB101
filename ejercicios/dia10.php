<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con PHP</title>
</head>
<body>
    <?php
    // comentario de una linea
    /*Comentario multilinea*/

    $x = 12;
    $y = 34.3;
    $z = $x + $y;
    echo "<h1>El valor de z es: $z</h1>";
    $a = "Hola mundo";
    $nombre = "JUAN";
    echo $a." - ".$nombre;
    //Condicional if
    if($x > $y){
        echo "<h2>$x es mayor que $y</h2>";
    }else{
        echo "<h2>$y es mayor que $x</h2>";
    }
    //iteracion for
    for($i = 0; $i < strlen($nombre); $i++){
        echo "<br>".$nombre[$i];
    }
    ?>

    <!-- FORMULARIOS PARA ENVIO A OTRO FORM EN PHP "procesador.php" 
    action="archivo_destino.php" y method= "POST"
    son IMPORTATNTES.
    -->
    <form action="procesador.php" method= "POST">
        <input type="text" name="edad"> 
        <button type="submit">
            enviar datos
        </button>
    </form>

</body>
</html>