<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="fotos" id="uma-coluna">

    <div id="container"> <!--Inicio container-->

        <?php
        include 'cabecalho.html';
        ?>

        <!--Inicio conteudo-->
        <div id="conteudo">
            <!--por questão de acessibilidade do usuário coloca o conteudo antes do menu lateral-->

            <div id="primario"> <!--conteudo primario-->

                <div class="caixa"> 
                    <h2>Destaque</h2>

                    <div class="caixa-conteudo destaque">
                        <h3 class="destaque">Nova Legislação</h3>
                        <img src="imagens/taxi.jpg" alt="" width="100%" class="imagem-principal">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="">Leia Mais</a>
                    </div>

                </div>

                <div class="caixa">
                    <h2>Mundo</h2>

                    <div class="caixa-conteudo">

                        <ul id="lista-noticias">
                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="" width="80">
                                    <h3>Novas tecnologias</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="" width="80">
                                    <h3>Novas tecnologias</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="" width="80">
                                    <h3>Novas tecnologias</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="" width="80">
                                    <h3>Novas tecnologias</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div> <!--fim conteudo primario-->


        </div>
        <!--fim canteudo-->


    </div><!--fim container-->

    <?php
    include 'rodape.html';
    ?>

</body>

</html>