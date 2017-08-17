<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php print $cabecalho_title;?></title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet"> <!--Importano a font do site do google-->

    <link rel="stylesheet" href="css/reset.css">

    <!--Cada página incluir o arquivo css própio-->
    <?php print @$cabecalho_css;?> <!--Utilizamos o '@' para tratar o erro, caso a variável não exista-->

    <!--Ajustar a media query para aplicar o css de adaptação a qualquer tamanho de tela menor que os 940px do desktop(ou seja, no máximo,939px)-->
    <link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">

    <!--Adaptação para mobile-->
    <meta name="viewport" content="width=device-width">
</head>

<body class="container">
    <header>

        <!--Suporte HTML5 no Internet Explorer Antigo-->
                    <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js">
                    </script>
                    <![endif]-->
                    <!--Fim código do suporte-->

                    <h1>
                        <img src="img/logo.png" alt="Mirror Fashion">
                    </h1>

                    <div class="sacola">
                        Nenhum item na sacola de compras
                    </div>

                    <nav class="menu-opcoes">
                        <ul>
                            <li><a href="#">Sua Conta</a></li>
                            <li><a href="#">Lista de desejos</a></li>
                            <li><a href="#">Cartão Fidelidade</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="#">Ajuda</a></li>
                        </ul>
                    </nav>
                </header>
