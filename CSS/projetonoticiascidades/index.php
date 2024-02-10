<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="home">

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

            </div> <!--fim conteudo primario-->

            <div id="secundario"> <!--conteudo secundario-->
                <div class="caixa">
                    <h2>Última entrevista</h2>

                    <div class="caixa-conteudo entrevista">
                        <h3 class="destaque">Entrevista com Felipe Silva</h3>
                        <img src="imagens/doutor.jpg" alt="" width="100%" class="imagem-principal">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="">Leia Mais</a>
                    </div>

                </div>
            </div><!--fim conteudo secundario-->

            <div id="lateral"> <!--lateral-->

                <div class="caixa">
                    <h2>Entrevistas</h2>

                    <div class="caixa-conteudo">
                        <ul>
                            <li> <a href="">José Almeida</a> </li>
                            <li> <a href="">Felipe Silva</a> </li>
                            <li> <a href="">Renato Rodrigues</a> </li>
                            <li> <a href="">Abelardo Silveira</a> </li>
                            <li> <a href="">André Carlos</a> </li>
                            <li> <a href="">Márcio Mello</a> </li>
                            <li> <a href="">João Pedro</a> </li>
                            <li> <a href="">Fernando Weiss</a> </li>
                        </ul>
                    </div>

                </div>

                <div class="caixa">
                    <h2>News</h2>

                    <div class="caixa-conteudo">
                        <form action="">
                            <div>
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="E-mail">
                            </div>
                            <input type="submit" valeu="cadastrar" class="submit">
                        </form>
                    </div>

                </div>

            </div> <!--fim lateral-->


        </div>
        <!--fim canteudo-->


    </div><!--fim container-->

    <?php
    include 'rodape.html';
    ?>

</body>

</html>