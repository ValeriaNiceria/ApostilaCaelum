
<!--Inicio cabeçalho-->
<?php
$cabecalho_css = '<link rel="stylesheet/less" href="less/estilo.less">';//LESS
$cabecalho_title = "Mirror Fashion";
include "cabecalho.php";
?>
<!--Fim cabeçalho-->


<section id="main">
    <!--Conteúdo principal-->

    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section><!--FIM . BUSCA-->
        <section class="menu-departamento">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section><!--FIM . MENU-DEPARTAMENTO-->

        <img src="img/destaque-home.png" alt="[Promoção: Big City Night]">
        <!--link para controlar à animação-->
        <a href="#" class="pause"></a>
    </div><!--FIM .CONTAINER . DESTAQUE-->

</section>

<section id="destaque">
    <!--Painéis com destaque-->

    <div class="container paineis">
        <!--Os paineis de novidades e mais vendidos entrarão aqui dentro-->
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <!--Conecta ao banco de dados e faz a busca dos produtos no banco de dados e percorra essa lista com um laço while-->
                <?php
                    $conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
                    $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY data LIMIT 0,12");

                    while($produtos = mysqli_fetch_array($dados)):  
                ?>
                <!-- produto-->
                <li>
                    <a href="produto.php?id=<?= $produtos['id']?>">
                        <figure>
                            <img src="img/produtos/miniatura<?= $produtos['id']?>.png" alt="<?= $produtos['nome']?>">
                            <figcaption><?= $produtos['nome']?> por <?= $produtos['preco']?></figcaption>
                        </figure>
                    </a>
                </li>
                <?php endwhile;?>
            </ol>
            <!--Criar o botão responsável por exibir os produtos-->
            <button type="button">Mostra mais</button>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
            <?php
                $dado = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas LIMIT 0,12");
                while($produto = mysqli_fetch_array($dado)):
            ?>
                <li>
                    <a href="produto.php?id=<?= $produto['id']?>">
                        <figure>
                            <img src="img/produtos/miniatura<?= $produto['id']?>.png" alt="<?= $produto['nome']?>">
                            <figcaption><?= $produto['nome']?> por <?= $produto['preco']?></figcaption>
                        </figure>
                    </a>
                </li>
                <?php endwhile;?>
            </ol>
            <!--Criar o botão responsável por exibir os produtos-->
            <button type="button">Mostra mais</button>
        </section>
    </div>

</section>

<!--Inicio rodapé-->
<?php
include "rodape.php";
?>
<!--Fim rodapé-->
<script src="js/banner.js"></script>

<script src="js/jquery.js"></script>
<script src="js/home.js"></script>

<!--carrega o pré-processador LESS-->
<script src="js/less.js" type="text/javascript"></script>

</body>
</html>


