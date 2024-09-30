<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>
    <?php
        //esto es un script de PHP
        #esto tmb es un comentario en php
        /*o este tmb es un comentario multilinea
        */
        echo "<h1>¡Hola mundo!</h1>";
    //o asi tres cadenas
        echo "<h1>","¡Hola mundo!","</h1>";
    //o con print pero no se puede concatenar    
        print "<h1>¡Hola mundo!</h1>";
    #algunas variables
        $numero=8;
        echo "<p>El numero es: $numero.</p>";
        $coche="prueba";

        var_dump($coche);
        echo "<br>";
        $color="azul";
        $$color=123;
        
        echo "Primera variable:", $color,"<br>";
        echo "Segunda variable:", $$color,"<br>";

        //salida informada por pantalla
        print_r($color);
        echo "<br>";
        var_dump($color);
        echo "<br>";

        //algunas variables
        //interpolar entre cadea o Expansion de variable

        $a=8;
        $b=10;
        $resultado=$a+$b;

        echo "El resultado es: $resultado";
        echo "<br>";

        //en lugar de
        echo "El resultado es: ".$resultado;

        echo "<br>";
        //arrays escalares
        #creacion y manipulacion de arrays
        #$numeros=array(42,31,28,-5,-13)
        #$numeros=[42,31,28,-5,13];
        #*****no usar la siguiente manera******mas peligroso menos control
        $numeros[]=42;
        $numeros[]=31;
        $numeros[]=28;
        $numeros[]=-5;
        $numeros[]=13;

        echo "<br>";
        var_dump($numeros);

        unset($numeros[4]);

        print_r($numeros);

        $numeros[]=11;
        #ahora pasará directo a [5] por eso no usas esta manera por esta razon
        #puedes recrear el [4] especificandolo $numeros[4]=13; Pero sale al final
        #por donde introduce

        #funciones para arrays
        echo "<br>"; 
        $valor=array_pop($numeros);
        print_r($valor);
        # extrae el ultimo elemento por el final  si empty devuelve NULL
        $total=array_push($numeros,123,-50); 
        #devuelve el numero de elementos
        echo "<br>";
        echo "El array tiene tantos elementos: $total";
        # introduce un elemento al final falta un parametro
        #array_shift()   # sacar por el inicio
        #array_unshift() #meter por el inicio
        echo "<br>";
        #array asociativo
        $meses=["Enero" => 1, "Febrero" => 0,"Marzo" => 25.3, "Abril"=>48.1];
        #aqui se usa {}
        echo " En enero llovio {$meses["Enero"]} litros.<br/>";
        echo "<br>";
        #array mixto - distintos tipos de indices y valores
        
        #3.2 sale como 3 como deprecated de entero
        $datos=[1=>"a",
                "1"=> false,
                3.0=> null,
                true => -80,123, ]; #se puede o no poner un , al final -80,

                # "a" false null -80    123
                #  1    "1"   3.2  true   4
        echo "<br>";        
        print_r($datos);

        $datosMulti=[ [1,2,3],
                      [4,5,6],
                      [7,8,9] ];

        #para acceder a la 2
        $respuesta=$datosMulti[0][2] ; 
        echo "<br>";
        echo $respuesta;
        echo "<br>";
        var_dump($datosMulti);

        $a =["a" =>1, "d"=>5];
        $b=["a" =>2,3,6];
        $c=["c"=>4,...$a,...$b];  #no ,$a,$b]

        echo "<pre>" 

        $foo=(integer)58.32;

        #Operador spaceship

        echo 1 <=> 1;   #debe devolver 0
        echo 10<=> 1;

        #operador de coalescencia nula

        $b =5;
        $c= 80;
        $d= "me hace falt uno o cinco cafes";

        echo $b??$c??$d;  #sale 5
        echo $a??$b??$c??$d; #sale 5  tmb a no definido

        #operadores de arrays

        $a=[2,4,8];
        $b=[1,4,7];
       
        $c=$a+$b;  #union por indices

        $a=["a" => "kiwi","b"=> "platano"];
        $b=["a" => "kiwi","b"=> "platano"];
        $c=$a+$b;
        


    
    ?>
</body>
</html>