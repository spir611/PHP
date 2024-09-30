<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #Modifica el segundo elemento del array $colores para que sea morado en lugar de verde

        $colores=["rojo","verde","azul"];
        $colores[]="amarillo";
        $colores[1]="morado";
    
        print_r($colores); 

    ?>
</body>
</html>