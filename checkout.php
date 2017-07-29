<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <!--BOOTSTRAP - É uma forma de começar o projeto logo com um design e recursos base sem perder tempo com design no início -->
    <link rel="stylesheet" href="css/bootstrap-flatly.css"> <!--Trocando o bootstrap.css para usar o tema flatly-->

    <meta name="viewport" content="width=device-width">

    <!--Removendo a margem da navbar-->
    <style>
        .navbar{
            margin:0;
        }
        body{
            padding-top: 70px;
        }
    </style>

</head>
<body>
    <!--Implementando um navbar-->
    <nav class="navbar navbar-default navbar-fixed-top"> <!-- trocando a classe navbar-static-top por navbar-fixed-top. O menu fica fixo no topo mesmo com scroll -->
        <div class="navbar-header">
            <!---A partir do HTML5, atributos começando com (data-) em qualquer tag são considerados atributos customizados e não quebram a validade do código HTML.
            Esses atributos são bastante úteis para passar informação para um código JavaScript -->
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><!---Criando o ícone para ativar o menu e [Usando o JavaScript do Bootstrap implicitamente]-->
                <span class="glyphicon glyphicon-align-justify"></span><!--Trocando a palavra 'menu' pelo ícone do sanduíche-->
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Mirror Fashion</a> <!--Adicionando ícone ao menu-->
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse"> <!--collapse e navbar-collapse: Para fazer o menu collapsar em telas pequenas-->
            <li><a href="sobre.php"><span class="glyphicon glyphicon-question-sign"></span> Sobre</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Ajuda</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Perguntas frequentes</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>
                Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row"> <!--Usar grids do Bootstrap para transformar nosso design em duas colunas em telas maiores-->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!--Adicionando a página checkout as informações de cor e tamanho escolhidas -->
                        <h2 class="panel-title">Sua compra</h2>
                    </div>
                    <div class="panel-body">
                        <img src="img/produtos/foto<?=$_POST['id']?>-<?=$_POST['cor']?>.png" class="img-thumbnail img-responsive hidden-xs"> <!--A classe hidden-xs: vai esconder o elemento  em resoluções menores de 768px-->
                        <dl> <!--A lista é a 'DL'-->
                            <dt>Produto</dt>
                            <dd><?=$_POST['nome']?></dd>

                            <dt>Cor</dt><!--Cada termo é representado por um 'DT'-->
                            <dd><?=$_POST['cor']?></dd><!--Sua definição em um 'DD'-->

                            <dt>Tamanho</dt>
                            <dd><?=$_POST['tamanho']?></dd>

                            <dt>Preço</dt>
                            <dd><?=$_POST['preco']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
                <form class="col-sm-8">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>

                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span> <!--Validando o campo email - apenas usando o input type correto-->
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked>
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right btn-lg">
                        <span class="glyphicon glyphicon-thumbs-up"></span> <!--Adicionar ícone do BOOTSTRAP-->
                        Confirmar Pedido
                    </button>
                </form>
        </div>
    </div>
<!--Adicionando o JavaScript do Bootstrap-->
<!--Chamando o arquivo do Bootstrap e do jQuery-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<!--Adicionado arquivo JS formatação de número-->
<script src="js/converteMoeda.js"></script>
</body>
</html>