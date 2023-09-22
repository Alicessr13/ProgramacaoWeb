<html>
    <head>

    </head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    <body>
        <?php 
        //variaveis não requerem definição explicita de tipos

        //string
        $nome = 'Alice Stephanie Soares Ribeiro';
        //int
        $idade = 20;
        //float
        $peso = 49.9;
        //boolean
        $fuma_sn = false; //true = 1  false = vazio

        $idade = 30.5; //sobrepoem o valor anterior, pode mudar de tipo durante o programa
        ?>
        <h1>Ficha cadastral:</h1>
        
        <p>Nome: <?= $nome ?></p> <!--tag de impressão em php-->
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fuma_sn ?></p>
    </body>
</html>