<?php
    include 'ejercicio.php'

    $ejercicios = array();
    $ejercicios[0] = new ("Hipertrofia","De 8 a 15","De 5 a 10","120 segundos","60 segundos");
    $ejercicios[1] = new ("Resistencia","De 25 a 60","De 12 a 15","90 segundos","80 segundos");
    $ejercicios[2] = new ("Potencia","De 1 a 5","De 2 a 5","90 segundos","70 segundos");

    $ejercicios_json = json_encode($ejercicios);
    $fp = fopen('ejercicios.json', 'w'):
    fwrite($fp, $ejercicios_json);
    fclose($fp);

?>