var numero = 9.9;
var formatado = "R$" + numero.toFixed(2).replace(".",",");

console.log(formatado);

var texto = "R$ 120,35";
var valor = parseFloat(texto.replace("R$ ","").replace(",","."));

console.log(valor);