

   <!--Inicio cabeçalho-->
    <?php
$cabecalho_css = '<link rel="stylesheet" href="css/estilo.css">';
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
                    <!-- produto-->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" alt="[Cardigan]">
                                <figcaption>Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" alt="[Camisa]">
                                <figcaption>Camisa por R$ 29,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" alt="[Cardigan]">
                                <figcaption>Cardigan por R$ 49,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" alt="[Jaqueta]">
                                <figcaption>Jaqueta por R$ 89,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto">
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="[Regata]">
                                <figcaption>Regata por R$19,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png" alt="[Blusa]">
                                <figcaption>Blusa por R$29,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                    <ol>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura15.png" alt="[Vestido]">
                                    <figcaption>Vestido por R$49,90</figcaption>
                                </figure>
                            </a>
                        </li>

                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura1.png" alt="[Cardigan]">
                                    <figcaption>Cardigan por R$129,90</figcaption>
                                </figure>
                            </a>
                        </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura11.png" alt="[Short]">
                                <figcaption>Short por R$39,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png" alt="[Camisa Xadrez]">
                                <figcaption>Camisa Xadrez por R$59,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura7.png" alt="[Blusa LIsa]">
                                <figcaption>Blusa Lisa por R$ 39,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura14.png" alt="Blusa">
                                <figcaption>Blusa por R$59,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>

    </section>

   <!--Inicio rodapé-->
   <?php
include "rodape.php";
?>
   <!--Fim rodapé-->

    <script src="js/banner.js"></script>

</body>
</html>


