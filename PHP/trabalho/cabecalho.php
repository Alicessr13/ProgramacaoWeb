<!-- versão: 1
Cabecalho da pagina
-->


<html> <!--inicio de um arquivo html, o codigo começa aqui-->
    <head>  <!--cabeça do código, dentro de head da pra colocar estruturas que não aparecem diretamente no site-->
        <meta charset="utf-8">  <!--define a codificação da página web, define que pode usar acentos, configuração de valores dentro do proprio atributo (self closing)-->
    </head> <!-- fecha o head-->

    <body align = "center"> <!-- corpo do código, informações que aparecem diretamente no site, conteudo da pagina com alinhamento no centro da página-->
     <!--bloco de código php, onde será feita a codifição, interpretação é feita do lado do servidor-->
        <?php   //tag padrão
        $texto = "Painel de controle" //variavel string com o texto painel de controle 
        ?> <!--fecha a tag-->
        <h2><?=$texto?></h2> <!--imprime na tela o valor da variavel texto usando a tag de impressão-->

    </body> <!-- fecha o body/corpo-->
</html> <!-- fecha o html-->