
async function loadDoc(v){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            cargarEjercicio(this.responseText, v);
        }
    }
    /*este es un comentario */
    xhttp.open("GET", "negocio/getEjercicio.php?ejercicio="+v,true);
    xhttp.send();
}

function cargarEjercicio(ejercicioJson, v){
    var ejercicioSnippet = document.getElementById(v);
    var ejercicios = document.getElementById(v);
    var newEjercicioSnippet = ejercicioSnippet.cloneNode(true);
    newEjercicioSnippet.style.display = "block";

    var ejercicio = JSON.parse(ejercicioJson);

    var ejeEjercicioElem = newEjercicioSnippet.querySelector("#ejercicio");
    var ejeRepeticionElem = newEjercicioSnippet.querySelector("#repeticion");
    var ejeSerieElem = newEjercicioSnippet.querySelector("#serie");
    var ejerDescansoElem = newEjercicioSnippet.querySelector("#descanso");
    var ejeTiempoSerieElem = newEjercicioSnippet.querySelector("#tiempoSerie");

    ejeEjercicioElem.innerHTML = ejercicio.ejercicio;
    ejeRepeticionElem.innerHTML = ejercicio.repeticiones;
    ejeSerieElem.innerHTML = ejercicio.series;
    ejerDescansoElem.innerHTML = ejercicio.tiempoDescanso;
    ejeTiempoSerieElem.innerHTML = ejercicio.tiempoSerie;

    ejercicios.appendChild(newEjercicioSnippet);
}

window.onload = function(){ loadDoc(9);};