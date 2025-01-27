<?php

    echo "<h1>Ejercicio 1</h1><br>";

    $array1 =
        ["nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona"];
    
    $contador1 = 1;
    foreach($array1 as $valor){
        echo "Dato" . $contador1 . "º" . ": " . $valor . "<br>";
        $contador1++;
        
    }

    echo "<h1>Ejercicio 2</h1><br>";

    foreach($array1 as $key => $valor){
        echo $key . ": " . $valor . "<br>";
    }

    echo "<h1>Ejercicio 3</h1><br>";

    $contador2 = 1;
    foreach($array1 as $clave => $valor){
        if ($clave == "edad") {
            $valor ++;
        } 
        echo "Dato" . $contador2 . "º" . ": " . $valor . "<br>";
        $contador2++;
    }

    echo "<h1>Ejercicio 4</h1><br>";

    unset($array1 ["ciudad"]);
    var_dump($array1);

    echo "<h1>Ejercicio 5</h1><br>";

    $letters = " a, b, c, d, e, f";
    $separador = (explode(",", $letters));

    $contador3 = 6;
    rsort($separador);
    foreach ($separador as $key => $value) {
        echo "letter" . $contador3 . "º" . ": " . $value . "<br>";
        $contador3 --;
    }

    echo "<h1>Ejercicio 6</h1><br>";

    $notas =
        [
            "Miguel" => 5,
            "Luis" => 7,
            "Marta" => 10,
            "Isabel" => 8,
            "Aitor" => 4,
            "Pepe" => 1,
        ];

            
    
    arsort($notas);
    echo "Notas de los estudiantes: ";
    foreach ($notas as $key => $value) {
        echo $key . ": " .  $value . ", ";

    }

    echo "<h1>Ejercicio 7</h1><br>";

    $alumnos = count($notas);
    $notatotal = array_sum($notas);
    $media = $notatotal / $alumnos;
    echo "La nota media es de : " . number_format($media, 2) . "<br>";

    echo "Los superiores a la media: ";
    foreach ($notas as $key => $value) {
        if ($value > $media) {
            echo $key . ", ";
        }
    }

    echo "<h1>Ejercicio 8</h1><br>";

    $notamasalta = 0;
    $mejoralumno = "";

    foreach ($notas as $alumno => $nota) {
        if ($nota > $notamasalta) {
            $notamasalta = $nota;
            $mejoralumno = $alumno;
        }
    }

    echo "La nota mas alta es: " . $notamasalta . " y el mejor alumno es: " . $mejoralumno;

    echo "<h1>Ejercicio 9</h1><br>";
    
?>