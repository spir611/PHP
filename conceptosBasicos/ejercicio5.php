<?php

#Escribe un script PHP y crea una variable con un numero flotante, conviertela a un entero y luego a cadena. Muestra el tipo de dato en cada paso utilizando la funcion gettype()

$a=54.32;
echo gettype($a);
settype($a,"integer");
echo "<br>";
echo gettype($a);
settype($a,"string");
echo "<br>";
echo gettype($a);