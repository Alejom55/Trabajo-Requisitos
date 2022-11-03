
class Enfermedad {
    constructor(nombre, sintomas) {
        this.nombre = nombre;
        this.sintomas = sintomas;
    }
}


const gripa = new Enfermedad("Gripa",
    ["tos", "fiebre", "escalofrios", "dolor de cabeza", "fatiga", "congestion"],)

const infeccionDeOido = new Enfermedad("Infección de oído",
    ["dolor de oido", "fiebre", "nerviosismo", "dificultad para dormir"],)

const paperas = new Enfermedad("Paperas",
    ["glandulas salivales inflamadas", "dolor de cabeza", "fatiga", "perdida de apetito"])

const faringitis = new Enfermedad("Faringitis",
    ["dolor de garganta", "molestia al digerir", "fiebre"])

    
var lstEnfermedades = [gripa, infeccionDeOido, paperas, faringitis]

var doodle1 = document.getElementById("dd1");
var doodle2 = document.getElementById("dd2");
var doodle3 = document.getElementById("dd3");
var doodle4 = document.getElementById("dd4");
var doodle5 = document.getElementById("dd5");


function promediar() {
    var sintomaSeleccionados = new Array()
    var cont = 0
    if (doodle1.options[doodle1.selectedIndex].value != "None") {
        for (var i = 0; i < lstEnfermedades.length; i++) {
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++) {
                if (doodle1.options[doodle1.selectedIndex].value == lstEnfermedades[i].sintomas[j]) {
                    sintomaSeleccionados.push(doodle1.options[doodle1.selectedIndex].value)
                }
            }
        }
    }
    if (doodle2.options[doodle2.selectedIndex].value != "None") {
        for (var i = 0; i < lstEnfermedades.length; i++) {
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++) {
                if (doodle2.options[doodle2.selectedIndex].value == lstEnfermedades[i].sintomas[j]) {
                    sintomaSeleccionados.push(doodle2.options[doodle2.selectedIndex].value)
                }

            }

        }
    }
    if (doodle3.options[doodle3.selectedIndex].value != "None") {
        for (var i = 0; i < lstEnfermedades.length; i++) {
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++) {
                if (doodle3.options[doodle3.selectedIndex].value == lstEnfermedades[i].sintomas[j]) {
                    sintomaSeleccionados.push(doodle3.options[doodle3.selectedIndex].value)
                }
            }

        }
    }
    if (doodle4.options[doodle4.selectedIndex].value != "None") {
        for (var i = 0; i < lstEnfermedades.length; i++) {
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++) {
                if (doodle4.options[doodle4.selectedIndex].value == lstEnfermedades[i].sintomas[j]) {
                    sintomaSeleccionados.push(doodle4.options[doodle4.selectedIndex].value)
                }

            }

        }
    }
    if (doodle5.options[doodle5.selectedIndex].value != "None") {
        for (var i = 0; i < lstEnfermedades.length; i++) {
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++) {
                if (doodle5.options[doodle5.selectedIndex].value == lstEnfermedades[i].sintomas[j]) {
                    sintomaSeleccionados.push(doodle5.options[doodle5.selectedIndex].value)
                }
            }

        }
    }
    const filtro = sintomaSeleccionados.filter((valor, indice) => {
        return sintomaSeleccionados.indexOf(valor) === indice;
    }
    );
    if(filtro.length <= 1){
        
        document.getElementById("prueba").innerHTML = "You must select at least two symptoms";
    }
    else if(calcularEnfermedad(filtro).nombre == "Gripa"){
        location.href="../ventana2/en/flu.html"
        }
    else if(calcularEnfermedad(filtro).nombre == "Infección de oído"){
            location.href="../ventana2/en/hate_infection.html"
            }
    else if(calcularEnfermedad(filtro).nombre == "Paperas"){
        location.href="../ventana2/en/mumps.html"
        }
    else if(calcularEnfermedad(filtro).nombre == "Faringitis"){
        location.href="../ventana2/en/pharyngitis.html"
        }
}


function calcularEnfermedad(lista) {
    var contMax = 0
    var maxPor = 0
    for (var i = 0; i < lstEnfermedades.length; i++) {
        var cont = 0
        var lenlista = lstEnfermedades[i].sintomas.length
        for (var j = 0; j <= lenlista; j++) {
            for (var k = 0; k <= lista.length; k++) {
                if (lstEnfermedades[i].sintomas[j] == lista[k]) {
                    cont++;
                    var porRelacion = (cont / lenlista) * 100
                    if (porRelacion >= maxPor) {
                        maxPor = porRelacion
                    };
                    if (cont >= contMax && porRelacion >= maxPor) {
                        var lstMax = lstEnfermedades[i];
                        contMax = cont;
                    }
                }
            }
        }
    }
    return lstMax
};


function PrimerColor() {

    document.getElementById("bodySintomas").style.background = "#93EFFF";

};

function SegundoColor() {

    document.getElementById("bodySintomas").style.background = "#00FFDD";

};

function TercerColor() {

    document.getElementById("bodySintomas").style.background = "#0375FF";
};

function CuartoColor() {

    document.getElementById("bodySintomas").style.background = "#FFCA00";
};
