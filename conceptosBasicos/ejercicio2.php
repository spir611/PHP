<?php

#Crea un script PHP y define en el una constante llamad IVA con el valor 0.21 y una variable precio con el valor 100. Calcula el precio total y muestra el resultado.

const IVA=0.21;
$precio=100;
$total=($precio*IVA)+$precio;

echo "El precio total es $total.";
