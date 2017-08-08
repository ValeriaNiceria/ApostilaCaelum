$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');

//vai remover a classe painel-compacto, fazendo o produto aparecer
$('.novidades button').click(function(){
    $('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos button').click(function(){
    $('.mais-vendidos').removeClass('painel-compacto');
});