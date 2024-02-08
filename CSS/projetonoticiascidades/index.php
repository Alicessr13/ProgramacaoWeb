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
                    <h2>Entrevistas</h2>

                    <div class="caixa-conteudo">
                        Conteudo
                    </div>

                </div>

            </div> <!--fim conteudo primario-->

            <div id="secundario"> <!--conteudo secundario-->
                secundario
            </div><!--fim conteudo secundario-->

            <div id="lateral"> <!--lateral-->

                <div class="caixa">
                    <h2>Entrevistas</h2>

                    <div class="caixa-conteudo">
                        Conteudo
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