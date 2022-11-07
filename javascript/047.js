//Array. Cuento el numero de galletas en un listado con ==

var lista = ["chocolate", "galletas", "leche", "donuts", "galletas"];
var contadorgalletas = 0;
for (var i = 0; i < lista.length; i = i + 1) {
  if (lista[i] == "galletas") {
      
      contadorgalletas=contadorgalletas+1
  }
}
console.log(contadorgalletas);
