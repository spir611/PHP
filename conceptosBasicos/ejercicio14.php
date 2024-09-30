<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    #Cambia el nombre del primer curso a Fisica en el array $clases
$clases=[
    "Profesores"=>["Pedro Pérez", "Gema Gómez"],
    "Cursos"=>["Biologia", "Química"],
];

echo "<br>";
$clases["Cursos"][0]="Fisica";
print_r($clases);
?>
</body>
</html>