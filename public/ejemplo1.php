<DOCTYPE html>
<html lang="en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        color: #555;
        text-align: center;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);    
    
    }
    h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;

    
    }
    p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    
    }
</style>
<body>
    <h1>Ejemplo 1</h1>
    <p>Hola Mundo</p>

    <?php
        echo "<h2>Hola desde PHP</h2>";
        echo "<p>Este es un ejemplo de PHP embebido en HTML</p>";
    ?>
    <h3>
        <?php
            $nombre = "Luke";
            echo "Hola, " . $nombre . "!";
        ?>
    </h3>  

    <?php
        $a = 5;
        $b = 10;
        $suma = $a + $b;
        echo "<p>La suma de $a y $b es: $suma</p>";


        //Esto es un comentario en PHP
       
        /* Esto es un comentario
        de varias líneas en PHP
        */

        



    ?>




    
</body>
</html>