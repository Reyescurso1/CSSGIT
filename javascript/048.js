//Array elegimos el mayor y menor de la lista

var lista= [2,4,5,8,9,20]

var edadMayor=0
var edadMenor=lista[0]
for (var i= 0; i<lista.length; i=i+1) {
 if (edadMayor<lista[i]) {
    edadMayor=lista[i]
 }
if(edadMenor>lista[i]) {
    edadMenor=lista[i] 
   

}
}
console.log(edadMayor)
console.log(edadMenor)

