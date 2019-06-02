<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conocimiento para hacer ejercicio</title>
    <link rel="stylesheet" type="text/css" href="presentacion/styles.css">
    <script src= "negocio/ejercicioAJAX.js"></script>
    <script src= "presentacion/funcionamiento.js"></script>
</head>
<body>

    <div class="ingreso">
        <p>Ingrese el peso a levantar</p>
        <input type="texto" id = "pesoMaximo" >
        <button id="buttonInfo" onclick="informacion()" style='width:100px; height:25px'>Informacion</button>
    </div>

    <div id="decision">
        <h1>Elije el ejercicio con que deseas trabajar este ejercicio</h1>
    </div>

    <div class="botones">
        <div class="seleccion">
            <button onclick="funo(0)" style='width:200px; height:25px' > Hipertrofia (masa moscular)</button>
        </div>
        <div class="seleccion">
            <button onclick="funo(1)" style='width:200px; height:25px'>Resistencia</button>
        </div>
        <div class="seleccion">
            <button onclick="funo(2)" style='width:200px; height:25px'>Potencia</button>
        </div>
        
    </div>


    <div class="respuesta">
        <p>Respuesta</p>
        <input type="texto" id = "responder"  size="60px" readonly="readonly">  
        <h1 id="responder"></h1>
    </div>

    <div id="informacion", class="snippet">

        <div id="descripcion">
            <h1>Aqui encontraras la informacion de como debes Realizar cada ejercicio</h1>
        </div>

        <div class="tarjeta">
            <div class="tarjetaInfo" id=0>
                <div id="ejercicio"></div>
                <div id="repeticion"></div>
                <div id="serie"></div>
                <div id="descanso"></div>
                <div id="tiempoSerie"></div>
            </div>
            <div class="imagen">
                <img src="<?php echo 'imagenes/hipertrofia.jpg'?>">
            </div>
        </div>

        <div class="tarjeta">
            <div class="tarjetaInfo" id=1>
                <div id="ejercicio"></div>
                <div id="repeticion"></div>
                <div id="serie"></div>
                <div id="descanso"></div>
                <div id="tiempoSerie"></div>
            </div>
            <div class="imagen">
            <img src="<?php echo 'imagenes/resistencia.jpg'?>">
            </div>
        </div>

        <div class="tarjeta">
            <div class="tarjetaInfo" id=2>
                <div id="ejercicio"></div>
                <div id="repeticion"></div>
                <div id="serie"></div>
                <div id="descanso"></div>
                <div id="tiempoSerie"></div>
            </div>
            <div class="imagen">
            <img src="<?php echo 'imagenes/potencia.jpg'?>">
            </div>
        </div>

    </div>

</body>
</html>