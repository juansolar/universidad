
function resultado(primero, segundo){
    var pesoMaximo = document.getElementById("pesoMaximo").value;
    var desde = pesoMaximo * primero;
    var hasta = pesoMaximo * segundo;
    document.getElementById("responder").value = "Tu puedes levantar desde "+desde+" hasta "+hasta+" KG";
}

function informacion(){
    alert("Esta pagina es solicitada por un fisioterapeuta para que las personas conozcan como se deben hacer los ejercicios adecuadamente, segun el peso que levantas");
}

var firstClickUno = false;
var firstClickDos = false;
var firstClickTres = false;
function funo(id){

    var aux = document.getElementById("pesoMaximo").value;
    if(aux == ""){
        alert("¡No ha ingresado el peso!");
        return 0;
    }

    if(!firstClickUno && id == 0){
        firstClickUno = true;
        resultado(0.6, 0.8);
        loadDoc(id);
        return 1;
    }
    if(!firstClickDos && id == 1){
        firstClickDos = true;
        resultado(0.4, 0.6);
        loadDoc(id); 
        return 2;
    }
    if(!firstClickTres && id == 2){
        firstClickTres = true;
        resultado(0.7, 1);
        loadDoc(id); 
        return 3;
    }
    return 0;
}