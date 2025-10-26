<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recogida de los datos</title>
    <link rel="icon" type="image/jpeg" href="../assets/images/Designer%20(1).jpeg" />
</head>

<body>
<h1>Muchas gracias por ponerte en contacto conmigo :)</h1>
<p>Pronto me pondré en contacto contigo</p>
<?php
    echo "He recibido los siguientes datos:<br>";
    foreach ($_POST as $k => $v) {
        echo "$k" . ": " . "$v" . "<br>";
    }
    function readfich() {
        $name = "contador.txt";
        $directory = "../datos";
        $fich = $directory . "/" . $name;
        if (!file_exists($fich)) {
            if (!file_exists($directory)) {
                mkdir($directory, 0700);
            }
            $visitas = 0;
        } else {
            $fp = fopen($fich, "r"); // Abrimos el fichero donde guardaremos y leeremos las visitas
            $visitas = intval(fgets($fp)); // Leemos las visitas y usamos intval para asegurarnos de que devuelve un entero
            fclose($fp); // Cerramos el archivo pues lo vamos a volver a abrir en modo escritura
        }
        $visitas++; // Incrementamos las visitas
        $fp = fopen($fich, "w"); // Abrimos el archivo en modo escritura
        fputs($fp, $visitas); // Escribimos las visitas sumadas
        echo "Visitas: ", $visitas; // Mostramos las visitas
    }

    /* readfich(); */
?>

</body>
</html>
