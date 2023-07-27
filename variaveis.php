<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    //ponto e vírgula(;) é fundamental
    
    //string
    $nome = 'Ana Almeida'; //podem ser utilizadas aspas simples ou duplas
    
    //int
    $idade = 17;
    $estudos = 'Desenvolvimento de sistemas';

    //float
    $peso = 50.5;

    //boolean - simples, armazena estado de true ou false(muito utilizadas em testes lógicos)
    $fumante_sn = true; //(true=1) ou false = vazio
    
    //...lógica...//
    $idade = '30' //valor final da variável
        ?>

    <h1>Ficha cadastral</h1>
    <br />
    <p>Nome:
        <?= $nome ?>
    </p>
    <p>Idade:
        <?php echo $idade ?>
    </p>
    <p>Estudos:
        <?php print $estudos ?>
    </p>
    <p>Peso:
        <?= $peso ?>
    </p>
    <p>Fumante:
        <?= $fumante_sn ?>
    </p>
</body>

</html>