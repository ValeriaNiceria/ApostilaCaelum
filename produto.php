        <!--Inicio cabeçalho-->
        <?php
            $cabecalho_css='<link rel="stylesheet" href="css/produto.css">';
            $cabecalho_title="Produto da Mirror Fashion";
            include("cabecalho.php");
        ?>
        <!--Fim cabeçalho-->

        <!--Inicio - Formulário de Produtos-->
       <div class="produto">
            <h1>Camiseta Ecko Caveira Bad to The Bone</h1>
            <p>Por apenas R$ 48,95</p>

            <form>
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
            include("rodape.php");
        ?>
        <!--Fim rodapé-->
    </body>

</html>