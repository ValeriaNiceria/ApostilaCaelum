        <!--Inicio cabeçalho-->
        <?php
$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
$cabecalho_title = "Produto da Mirror Fashion";
include "cabecalho.php";
?>
        <!--Fim cabeçalho-->

        <!--Inicio - Formulário de Produtos-->
        <div class="produto">
            <h1>Camiseta Ecko Caveira Bad to The Bone</h1>
            <p>Por apenas R$ 48,95</p>

            <!--Apontando o formulário para a página checkout.php com o atributo action -->
            <form action="checkout.php" method="POST"><!--Utilizando o method 'POST', os parâmetros serão enviados mas não estarão visíveis na URL -->
                <fieldset class="cores">
                    <legend>
                        Escolha a cor:
                    </legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto2-verde.png" alt="Produto verde">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto2-rosa.png" alt="Produto rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto2-azul.png" alt="Produto azul">
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
                <input type="hidden" name="nome" value="Camiseta Ecko Caveira Bad to The Bone">
                <input type="hidden" name="preco" value="48.95">
                <input type="hidden" name="id" value="2">

                <input type="submit" class="comprar" value="Comprar">
            </form>

        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
                material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
                mesmo pela nossa entrega a jato.</p>
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
                            <td>Cardigã 7845</td>
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
        </body>
        </html>