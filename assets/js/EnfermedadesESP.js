
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

lstEnfermedades = [gripa]

var doodle1 = document.getElementById("dd1");
var doodle2 = document.getElementById("dd2");
var doodle3 = document.getElementById("dd3");
var doodle4 = document.getElementById("dd4");
var doodle5 = document.getElementById("dd5");
function onChange() {
  var text = doodle1.options[doodle1.selectedIndex].text;
  return (text);
}
doodle1.onchange = onChange;

function promediar(){
    var cont = 0
    if (doodle1.options[doodle1.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle1.options[doodle1.selectedIndex].value == lstEnfermedades[i].sintomas[j])
                cont = cont + 1;
                document.getElementById("prueba").innerHTML = cont;
                console.log(doodle1.options[doodle1.selectedIndex].value)
                
                eliminar(doodle2);
                eliminar(doodle3);
                eliminar(doodle4);
                eliminar(doodle5);
            }
               
        }
    }
    if (doodle2.options[doodle2.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle2.options[doodle2.selectedIndex].value == lstEnfermedades[i].sintomas[j])
                cont = cont + 1;
                document.getElementById("prueba").innerHTML = cont;
            }
                
        }
    }
    if (doodle3.options[doodle3.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle3.options[doodle3.selectedIndex].value == lstEnfermedades[i].sintomas[j])
                cont = cont + 1;
                document.getElementById("prueba").innerHTML = cont;
            }
                
        }
    }
    if (doodle4.options[doodle4.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle4.options[doodle4.selectedIndex].value == lstEnfermedades[i].sintomas[j])
                cont = cont + 1;
                document.getElementById("prueba").innerHTML = cont;
            }
                
        }
    }
    if (doodle5.options[doodle5.selectedIndex].value != "None"){
        for (var i = 0; i < lstEnfermedades.length; i++){
            for (var j = 0; j < lstEnfermedades[i].sintomas.length; j++){
                if (doodle5.options[doodle5.selectedIndex].value == lstEnfermedades[i].sintomas[j])
                cont = cont + 1;
                document.getElementById("prueba").innerHTML = cont;
            }
                
        }
    }
}

function Mover(){
    document.getElementById("prueba").innerHTML =" onChange()";
}

function eliminar(ola){
    for (var i=0; i<ola.length; i++) {
        if (ola.options[i].value == "tos")
            ola.remove(i);
    }
    //for(i=0;i<ola.length;i++)
    //  if(ola.options[i].selected==true)
    //  {
    //    ola.remove(i);
    //    i--;
    //  }
  }
  
function Limpiar(){
    document.getElementById("prueba").innerHTML = ""
}
function DefaultColor(){
    document.body.style.background = "#07B8FF"
   
}

function PrimerColor(){

   
    document.body.style.background = "#F95F5F"
}

function SegundoColor(){

    document.body.style.background = "#0375FF"
}

function TercerColor(){

    document.body.style.background = "#D7DA62"
}


document.getElementById("def").addEventListener("click", DefaultColor);
document.getElementById("color1").addEventListener("click", PrimerColor);
document.getElementById("color2").addEventListener("click", SegundoColor);
document.getElementById("color3").addEventListener("click", TercerColor);
document.getElementById("enviar").addEventListener("onclick", promediar);
document.getElementById("enviar").addEventListener("dblclick", Limpiar);

