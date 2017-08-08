//Atualizando o valor do output ao mexer com o range
$('[name=tamanho]').on(' change input',function(){ //Para suportar o IE10, precisamos color o evento onchange
    $('[name=valortamanho]').val(this.value);
    $('[name=valortamanho]').text(this.value);/*(IE10)Além disso, como o elemento output não é corretamente reconhecido pelo navegador,
    alterar a propriedade 'value' dele não vai ter o resultado esperado.
    Para o código funcionar nele, precisamos mexer diretamente no texto do elemento.*/
});