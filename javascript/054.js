//Array . Calcular el numero mas alto de los dos Array
var lista= [2,5,4,5,8,5,20]
var lista2=[3,2,5,8,4,5,2]
var elmasalto=0
for (var i= 0; i<lista.length; i=i+1) {
 if (elmasalto <lista[i]) {
  elmasalto=lista[i]
}
}
for (var i=0; i<lista2.length; i=i+1) {
  if  (elmasalto <lista2[i]) {
  elmasalto=lista[i]
}
}  
 
console.log(elmasalto)

 


