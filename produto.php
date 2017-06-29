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

       <!--Inicio rodapé-->
        <?php
            include("rodape.php");
        ?>
        <!--Fim rodapé-->
    </body>
</html>