function numberParaReal(numero){
    var formatado = "R$ " + numero.toFixed(2).replace(".",",").replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
    return formatado;
}

function realParaNumber(texto){
    var valor = parseFloat(texto.replace("R$ ","").replace(",","."));
    return valor;
}
