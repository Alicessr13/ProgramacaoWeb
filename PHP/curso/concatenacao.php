<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>

    <body>
        <?php 
            $nome = "Alice";
            $cor = 'rosa';
            $idade = 20;
            //utiliza o . no começo e no final para concatenar
            echo 'Ola '.$nome.' vi que sua cor favorita é '.$cor.', tem '.$idade.' anos e gosta de musica';
            echo '<br/>';

            echo "Ola $nome vi que sua cor favorita é $cor, tem $idade anos e gosta de musica"; //aspas duplas pode ser incluso diretamente a variavel, aspas duplas e mais lento que simples
        ?>
    </body>
</html>