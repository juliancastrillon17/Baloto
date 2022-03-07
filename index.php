<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="styleSheet" type="text/css">
    <title>php Baloto</title>
</head>
<body>
    <?php

    //Baloto; 
    $balotaUno = rand(1,43);
    $balotaDos = rand(1,43);
    $balotaTres = rand(1,43);
    $balotaCuatro = rand(1,43);
    $balotaCinco = rand(1,43);
    $superBalota = rand(1,16);

    $numeroUno = rand(1,43);
    $numeroDos = rand(1,43);
    $numeroTres = rand(1,43);
    $numeroCuatro = rand(1,43);
    $numeroCinco = rand(1,43);
    $numeroSexto = rand(1,16);


    echo "<br><br><br>";

    echo "----------- SORTEO DEL BALOTO -----------<br>";
    echo "Numero de balota: ". $balotaUno."<br>";
    echo "Numero de balota: ". $balotaDos."<br>";
    echo "Numero de balota: ". $balotaTres."<br>";
    echo "Numero de balota: ". $balotaCuatro."<br>";
    echo "Numero de balota: ". $balotaCinco."<br>";
    echo "SuperBalota: ". $superBalota."<br><br>";


    echo "----------- FACTURA DE JUEGO -----------<br>";
    echo "Numero jugado: ". $numeroUno."<br>";
    echo "Numero jugado: ". $numeroDos."<br>";
    echo "Numero jugado: ". $numeroTres."<br>";
    echo "Numero jugado: ". $numeroCuatro."<br>";
    echo "Numero jugado: ". $numeroCinco."<br>";
    echo "Numero jugado de super Balota: ". $numeroSexto."<br><br>";


    
    if($numeroUno != $balotaUno && $numeroDos != $balotaDos && $numeroTres != $balotaTres && $numeroCuatro != $balotaCuatro && $numeroCinco != $balotaCinco && $numeroSexto != $superBalota){
        echo ("<h2>Puedes jugar la revancha, no has ganado en este turno</h2>");

        //Juego de la revancha; 
        $balotaUno = rand(1,43);
        $balotaDos = rand(1,43);
        $balotaTres = rand(1,43);
        $balotaCuatro = rand(1,43);
        $balotaCinco = rand(1,43);
        $superBalota = rand(1,16);

        echo "-----------SORTEO DEL BALOTO-----------<br>";
        echo "Numero de balota: ". $balotaUno."<br>";
        echo "Numero de balota: ". $balotaDos."<br>";
        echo "Numero de balota: ". $balotaTres."<br>";
        echo "Numero de balota: ". $balotaCuatro."<br>";
        echo "Numero de balota: ". $balotaCinco."<br>";
        echo "SuperBalota: ". $superBalota."<br><br>";

        if($numeroUno != $balotaUno && $numeroDos != $balotaDos && $numeroTres != $balotaTres && $numeroCuatro != $balotaCuatro && $numeroCinco != $balotaCinco && $numeroSexto != $superBalota){
            echo ("<h4>Puedes volverlo a intentar luego, gracias por participar</h4>");
        }else if($numeroUno == $balotaUno && $numeroDos == $balotaDos && $numeroTres == $balotaTres && $numeroCuatro == $balotaCuatro && $numeroCinco == $balotaCinco && $numeroSexto == $superBalota){
            echo ("<h2>ERES EL NUEVO MILLONARIO REVANCHA BALOTO</h2>");
        }

    }else if($numeroUno == $balotaUno || $numeroDos == $balotaDos || $numeroTres == $balotaTres || $numeroCuatro == $balotaCuatro || $numeroCinco == $balotaCinco || $numeroSexto == $superBalota){
        echo ("<h2>ERES GANADOR DE UNA CIFRA</h2>");
        echo ("<h2>GANASTE $25.000 MILLONES DE PESOS</h2>");

    }
    else if($numeroUno == $balotaUno && $numeroDos == $balotaDos || $numeroTres == $balotaTres && $numeroCuatro == $balotaCuatro || $numeroCinco == $balotaCinco && $numeroSexto == $superBalota){
        echo ("<h2>ERES GANADOR DE DOS CIFRAS</h2>");
        echo ("<h2>GANASTE $50.000 MILLONES DE PESOS</h2>");

    }
    else if($numeroUno == $balotaUno && $numeroDos == $balotaDos && $numeroTres == $balotaTres || $numeroCuatro == $balotaCuatro && $numeroCinco == $balotaCinco && $numeroSexto == $superBalota){
        echo ("<h2>ERES GANADOR DE TRES CIFRAS</h2>");
        echo ("<h2>GANASTE $75.000 MILLONES DE PESOS</h2>");

    }
    else if($numeroUno == $balotaUno && $numeroDos == $balotaDos && $numeroTres == $balotaTres && $numeroCuatro == $balotaCuatro || $numeroCinco == $balotaCinco && $numeroSexto == $superBalota){
        echo ("<h2>ERES GANADOR DE CUATRO CIFRAS</h2>");
        echo ("<h2>GANASTE $100.000 MILLONES DE PESOS</h2>");

    }
    else if($numeroUno == $balotaUno && $numeroDos == $balotaDos && $numeroTres == $balotaTres && $numeroCuatro == $balotaCuatro && $numeroCinco == $balotaCinco || $numeroSexto == $superBalota){
        echo ("<h2>ERES GANADOR DE CINCO CIFRAS</h2>");
        echo ("<h2>GANASTE $125.000 MILLONES DE PESOS</h2>");

    }
    else if($numeroUno == $balotaUno && $numeroDos == $balotaDos && $numeroTres == $balotaTres && $numeroCuatro == $balotaCuatro && $numeroCinco == $balotaCinco && $numeroSexto == $superBalota){
        echo ("<h2>ERES EL NUVO MILLONARIO DEL BALOTO</h2>");
        echo ("<h2>GANASTE $150.000 MILLONES DE PESOS</h2>");

    }

        
        
    ?>
</body>
</html>