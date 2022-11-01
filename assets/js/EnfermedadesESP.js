
import {Enfermedad} from "./claseEnfermedades"

const gripa = new Enfermedad("Gripa", 
"La gripe afecta a los pulmones, la nariz y la garganta. Los niños pequeños, los adultos de edad avanzada, las mujeres embarazadas y las personas con enfermedades crónicas o un sistema inmunológico débil corren mayor riesgo. Los síntomas incluyen fiebre, escalofríos, dolores musculares, tos, congestión, secreción nasal, dolor de cabeza y fatiga.  La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.",
["tos", "fiebre", "escalofrios", "dolor de cabeza", "fatiga", "congestion"],
"La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.")

document.getElementById("sintoma1").value = gripa.nombre;
console.log(gripa.nombre);