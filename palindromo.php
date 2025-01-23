<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Palíndromo</title>
    <style>
        body {
            background-color:cyan;
            font-family: Arial, sans-serif;
        }
        div {
            border-bottom: 8px solid black;
            height: auto;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="text"], input[type="number"] {
            margin: 10px 0;
            padding: 5px;
            width: 80%;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div>
        <form method="GET" action="palindromo.php">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="edad">Edad:</label><br>
            <input type="number" id="edad" name="edad" required><br>
            <input type="submit" value="Generar un palíndromo">
        </form>
    </div>
</body>
</html>
orm>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] :'';
        $edad = isset($_GET['edad']) ? $_GET['edad'] : '';

        if (!empty($nombre)) {

            $nombreLimpio = strtolower(str_replace(' ',' ', $nombre));
            $reverso = strrev(substr($nombreLimpio, 0, -1));   
            $palindromo = $nombreLimpio . $reverso;   

            echo "<p>nombre original:" . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>Palíndromo generado: " . htmlspecialchars($palindromo, ENT_QUOTES, 'UTF-8') . "</p>";
            
        } else {
             echo "<p>No se ingresó un nombre válido.</p>";
        }


        if (!empty($edad)) {
             echo "<p>Edad: " . htmlspecialchars($edad, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
             echo "<p>No se ingresó una edad válida.</p>";
        }
    
    }
    
?>

</body>
</html>


