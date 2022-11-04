//hacemos una piramide d asteriscos


var asteriscos = "*";
var tope = 3;
for (var i = 0; i <= tope; i = i + 1) {
  espacios = "";
  var totalEspacios = tope + 1 - i;
  var espacios = "";
  for (var j = 1; j <= totalEspacios; j = j + 1) {
    espacios = espacios + " ";
  }
  console.log(espacios + asteriscos);
  asteriscos = "*" + asteriscos + "*";
}
