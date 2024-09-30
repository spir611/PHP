<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        # Crea un script PHP y define una variable booleana que indique si una person es mayor de edad (true o false). Define otra variable que contenga el nombre de una pais y seguidamente utilizando un operador logico verifica si la person es mayor de edad y vive en Espña Muestra un mensaje indicando si cumple ambas condiciones.

        $isMayorDeEdad=0;
        $edad=25;
        $pais="España";

        if($edad>=18){
            $isMayorDeEdad=true;
        }else{
            $isMayorDeEdad=false;
        }

        if($isMayorDeEdad && $pais=="España"){
            
            echo "Cumples las condiciones.";
        }else{
            
            echo "No cumples las condiciones.";
        }


#es deberia haber usado var_export
#var_export($isMayordeEdad)



    ?>
</body>
</html>