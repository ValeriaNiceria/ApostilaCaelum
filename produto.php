    <!--Abrindo a conexão com o banco de dados e selecionando os dados dos produtos-->
    <?php
        $conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
        $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id=$_GET[id]");
        $produtos = mysqli_fetch_array($dados);

        $nome = $produtos['nome'];
    ?>
        <!--Inicio cabeçalho-->
        <?php
            $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
            $cabecalho_title = "$nome - Mirror Fashion";
            include "cabecalho.php";
        ?>
        <!--Fim cabeçalho-->

        <!--Inicio - Formulário de Produtos-->
        <div class="produto">
            <h1><?= $produtos['nome']?></h1>
            <p>Por apenas <?= $produtos['preco'] ?></p>

            <!--O botão do facebook-->
            <div class="fb-like" data-href="http://www.mirrorfashion.net"
            data-send="false" data-layout="box_count"
            data-width="58" data-show-faces="false"></div>
            <!--botão twitter-->
            <a href="https://twitter.com/share"
            class="twitter-share-button" data-count="vertical">Tweet</a>
            <!--botão google+-->
            <div class="g-plusone" data-annotation="inline"></div>




            <!--Apontando o formulário para a página checkout.php com o atributo action -->
            <form action="checkout.php" method="POST"><!--Utilizando o method 'POST', os parâmetros serão enviados mas não estarão visíveis na URL -->
                <fieldset class="cores">
                    <legend>
                        Escolha a cor:
                    </legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto<?= $produtos['id']?>-verde.png" alt="Produto verde">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto<?= $produtos['id']?>-rosa.png" alt="Produto rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto<?= $produtos['id']?>-azul.png" alt="Produto azul">
                    </label>
                </fieldset>
                <!--Seletor de tamanho-->
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>

                    <input type="range" min="36" max="46" value="42" step="2"
                    name="tamanho" id="tamanho">
                    <!--Elemento output do HTML5 -
                    Essa tag representa a saída de algum cálculo ou valor simples obtido a partir de um ou mais componentes deum formulário.
                    Ele tem um atributo 'for' que aponta de qual elemento saiu o valor. -->
                    <output for="tamanho" name="valortamanho">42</output>
                </fieldset>
                <!--HIDDEN - Usada quando apresar da informação ser importante para o programa que irá processar os dados,
                esta não necessita ser apresentada ao usuário-->
                <input type="hidden" name="nome" value="<?= $produtos['nome']?>">
                <input type="hidden" name="preco" value="<?= $produtos['preco']?>">
                <input type="hidden" name="id" value="<?= $produtos['id']?>">

                <input type="submit" class="comprar" value="Comprar">
            </form>

        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p><?= $produtos['descricao'] ?></p>
                <!--Tabela com características do produto-->
                <table><!--Quando queremos exibir uma série de dados tabulares, é indicado o uso da tag <table> -->
                    <thead> <!-- Serve para agrupar linhas da tabela -->
                        <tr>
                            <th>Característica</th> <!--A tag <th>, é útil para diferenciar seu conteúdo das células de dados -->
                            <th>Detalhe</th> <!--Dentro do grupo <thead> devemos ter apenas linhas contendo a tag <th> como célula -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td><?= $produtos['nome']?></td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algodão e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--Inicio rodapé-->
            <?php
include "rodape.php";
?>
            <!--Fim rodapé-->
            <!--Importando o jQuery-->
            <script src="js/jquery.js"></script>
            <!--Importando o arquivo JS que irá customizar o output-->
            <script src="js/produto.js"></script>

            <!--script do facebook-->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

            <!--script do twitter-->
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
                js.src="http://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>

            <!--script do google+-->
            <script type="text/javascript">
                window.___gcfg = {lang: 'pt-BR'};
                (function() {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
            </script>




        </body>
        </html>