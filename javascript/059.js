//  Objeto. Definimos las propiedades del objeto y en la consola nos los reproduce.
var factura1= {
  numero: 1,
  concepto: "ordenador",
  importe: 1000,
};
var factura2 = {
  numero: 2,
  concepto: "tablet",
  importe: 500,
};
var factura3 = {
  numero: 3,
  concepto: "raton",
  importe: 50,
};
var misfacturas = [factura1, factura2, factura3];
var sumatotal =0;
 for (var i =0; i < misfacturas.length; i = i + 1) {
  sumatotal = sumatotal + misfacturas[i].importe;
 }
console.log("sumatotal:"+sumatotal);