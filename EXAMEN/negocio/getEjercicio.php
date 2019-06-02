<?php
    include 'ejercicio.php';

    $json = file_get_contents('ejercicios.json');

    $ejercicios = json_decode($json,true);

    $eje = Ejercicio::createFromArray($ejercicios[0]);

    if(isset($_GET["ejercicio"]) ){
        $n = $_GET["ejercicio"];

        if($n < count($ejercicios)){
            $eje = Ejercicio::createFromArray($ejercicios[$n]);
        }
        else{
            echo "Error, número dado no encontrado";
        }
    }
    else{
        echo "Error, número dado no encontrado";
    }
    echo json_encode($eje);
?>