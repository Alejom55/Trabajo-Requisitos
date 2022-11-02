
class Enfermedad{
    constructor(nombre,resumen,sintomas,tratamiento){
        this.nombre = nombre;
        this.resumen = resumen;
        this.sintomas = sintomas;
        this.tratamiento = tratamiento;
    }
}


const gripa = new Enfermedad("Gripa", 
"La gripe afecta a los pulmones, la nariz y la garganta. Los niños pequeños, los adultos de edad avanzada, las mujeres embarazadas y las personas con enfermedades crónicas o un sistema inmunológico débil corren mayor riesgo. Los síntomas incluyen fiebre, escalofríos, dolores musculares, tos, congestión, secreción nasal, dolor de cabeza y fatiga.  La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.",
["tos", "fiebre", "escalofrios", "dolor de cabeza", "fatiga", "congestion"],
"La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.")

const infeccionDeOido = new Enfermedad("Infección de oído",
"Las infecciones del oído suelen estar ocasionadas por bacterias o virus. El dolor de oídos y la fiebre son síntomas comunes. Con menos frecuencia, se puede producir drenaje de líquido de los oídos o pérdida de la audición. La mayoría de las infecciones de oído desaparecen sin necesidad de tratamientos. Otros casos requieren antibióticos.",
["dolor de oido","fiebre","nerviosismo","dificultad para dormir"],
"La mayoría de las infecciones de oído desaparecen sin necesidad de tratamientos. Otros casos requieren antibióticos.")



var lstEnfermedades = [gripa,infeccionDeOido]

var doodle1 = document.getElementById("dd1");
var doodle2 = document.getElementById("dd2");
var doodle3 = document.getElementById("dd3");
var doodle4 = document.getElementById("dd4");
var doodle5 = document.getElementById("dd5");
function onChange() {
  var text = doodle1.options[doodle1.selectedIndex].text;
  return (text);
}
//doodle1.onchange = onChange;

function promediar(){
    var sintomaSeleccionados = new Array()
    var cont = 0
    if (doodle1.options[doodle1.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle1.options[doodle1.selectedIndex].value == lstEnfermedades[i].sintomas[j]){
                    cont = cont + 1;
                    document.getElementById("prueba").innerHTML = cont;
                    sintomaSeleccionados.push(doodle1.options[doodle1.selectedIndex].value)
                    
                    eliminar(doodle2,doodle1.options[doodle1.selectedIndex].value);
                    eliminar(doodle3,doodle1.options[doodle1.selectedIndex].value);
                    eliminar(doodle4,doodle1.options[doodle1.selectedIndex].value);
                    eliminar(doodle5,doodle1.options[doodle1.selectedIndex].value);
                }
                
            }
               
        }
    }
    if (doodle2.options[doodle2.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle2.options[doodle2.selectedIndex].value == lstEnfermedades[i].sintomas[j]){
                    cont = cont + 1;
                    document.getElementById("prueba").innerHTML = cont;
                    sintomaSeleccionados.push(doodle2.options[doodle2.selectedIndex].value)
                }
                
            }
                
        }
    }
    if (doodle3.options[doodle3.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle3.options[doodle3.selectedIndex].value == lstEnfermedades[i].sintomas[j]){
                    cont = cont + 1;
                    document.getElementById("prueba").innerHTML = cont;
                    sintomaSeleccionados.push(doodle3.options[doodle3.selectedIndex].value)
                }

            }
                
        }
    }
    if (doodle4.options[doodle4.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle4.options[doodle4.selectedIndex].value == lstEnfermedades[i].sintomas[j]){
                    cont = cont + 1;
                    document.getElementById("prueba").innerHTML = cont;
                    sintomaSeleccionados.push(doodle4.options[doodle4.selectedIndex].value)
                }

            }
                
        }
    }
    if (doodle5.options[doodle5.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle5.options[doodle5.selectedIndex].value == lstEnfermedades[i].sintomas[j]){
                    cont = cont + 1;
                    console.log(lstEnfermedades[i].sintomas.length)
                    document.getElementById("prueba").innerHTML = cont;

                    sintomaSeleccionados.push(doodle5.options[doodle5.selectedIndex].value)
                }
            }
                
        }
    }
    const filtro = sintomaSeleccionados.filter((valor, indice) => {
        return sintomaSeleccionados.indexOf(valor) === indice;
      }
    );
    console.log(filtro);
    //console.log(cont)
}

function calcualrPorcentaje(){

};
function calcularEnfermedad(lista){
    var contMax = 0
    var maxPor = 0
    for(var i = 0; i < lstEnfermedades.length; i++){
        var cont = 0
        console.log(i)
        console.log(lstEnfermedades[i].sintomas.length)
        var lenlista = lstEnfermedades[i].sintomas.length
        for(var j = 0; j <= lenlista;j++){
            for(var k = 0; k <= lista.length; k++){
                if(lstEnfermedades[i].sintomas[j] == lista[k]){
                    cont ++;
                    var porRelacion = (cont / lenlista) * 100
                    if(porRelacion >= maxPor){
                        maxPor = porRelacion
                    };
                    if(cont >= contMax && porRelacion >= maxPor){
                        var lstMax = lstEnfermedades[i];
                        contMax = cont;
                    }
                }
                
            }
        }
    }
    return lstMax
};
/*
def f():
    contMax = 0
    maxPor = 0
    for i in range(len(lista)):
        cont = 0
        lenlista = len(lista[i])
        for j in range(lenlista):
            for k in range(len(lista2)):
                if lista[i][j] == lista2[k]:
                    cont += 1
                    porRelacion = (cont / lenlista) * 100
                    if porRelacion >= maxPor:
                        maxPor = porRelacion
                    if cont >= contMax and porRelacion >= maxPor:
                        lstMax = lista[i]
                        contMax = cont
    return lstMax
*/

function eliminar(ola, sintoma){
    for (var i=0; i<ola.length; i++) {
        if (ola.options[i].value == sintoma)
            ola.remove(i);
    }
  }
  
function Limpiar(){
    document.getElementById("prueba").innerHTML = ""
};
function PrimerColor(){

    document.getElementById("bodySintomas").style.background = "#93EFFF";

};

function SegundoColor(){

    document.getElementById("bodySintomas").style.background = "#00FFDD";

};

function TercerColor(){

    document.getElementById("bodySintomas").style.background = "#0375FF";
};

function CuartoColor(){

    document.getElementById("bodySintomas").style.background = "#FFCA00";
};



