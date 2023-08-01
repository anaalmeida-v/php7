<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $nome = 'Ana Almeida';
    $cor = 'preto';
    $idade = 17;
    $hobby = 'dançar';

    //operador '.'
    echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', que você possui ' . $idade . ' anos e que você gosta de ' . $hobby;

    //aspas duplas - variáveis ficam dentro das aspas
    echo '<br/>';

    echo "Olá $nome, vi que sua cor preferida é $cor, que você possui $idade anos e que você gosta de $hobby"

        ?>
</body>

</html>