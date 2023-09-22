<!-- versão: 
programa principal onde o usuário realizara o login
1-->
<html> <!--inicio de um arquivo html, o codigo começa aqui-->
    <head>  <!--cabeça do código, dentro de head da pra colocar estruturas que não aparecem diretamente no site-->
        <meta charset="utf-8">
        <title>Painel de controle - squid</title> <!--titulo da pagina web-->
    </head> <!-- fecha o head-->

    <body> <!-- corpo do código, informações que aparecem diretamente no site, conteudo da pagina-->
     <!--bloco de código php, onde será feita a codifição, interpretação é feita do lado do servidor-->
        <?php //tag padrão

        $login = "Login:"; //variavel login string com o texto Login
        $senha = "Senha:"; //variavel senha string com o tecto Senha

        require('cabecalho.php'); // a função require faz a importação de arquivos, está fazendo a importação do arquivo cabecalho.php
        ?> <!--fecha a tag padrão-->


        <form action="valida_login.php" align="center"> <!--formularios-->

            <?= $login ?> <!-- impreme para o usuário a variavel login utilizando a tag de impressão -->
            <br> <!-- pula uma linha -->
            <input type="text" name="usuário"> <br>  <!-- input = abre uma caixa para inserir dados, type = tipo do dado que será inserido nessa caso texto,
				name = nome do input para capturar os dados posteriormente, br = pula uma linha-->

            <?= $senha ?> <!-- impreme para o usuário a variavel senha utilizando a tag de impressão -->
            <br> <!-- pula uma linha -->
            <input type="password" name="senha"> <br> <!-- input = abre uma caixa para inserir dados, type = tipo do dado que será inserido nessa caso password/senha,
				name = nome do input para capturar os dados posteriormente, br = pula uma linha -->
            <br> <!-- pula uma linha -->
            <input type="submit" value="Entrar">  <!--input = abre uma caixa para inserir dados, type = tipo do dado que será inserido nessa caso submit,
				value = texto que aparecerá para o usuário -->

        </form> <!-- fecha o formulario -->

    <?php require('rodape.php'); ?> <!-- a função require faz a importação de arquivos, está fazendo a importação do arquivo rodape.php-->

    </body> <!-- fecha o body/corpo-->
</html> <!-- fecha o html-->