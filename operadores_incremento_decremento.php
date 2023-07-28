<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br/>";
    echo 'O valor contido em a após o incremento, é ' . $a++ . '<br/>'; //neste momento o valor ainda é o inicial, pois o incremento é feito após a interpretação da instrução
    echo "O valor atualizado é $a"; //valor=8
    ?>

    <h3>Pré-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br/>";
    echo 'O valor contido em a previamente do incremento, é ' . ++$a . '<br/>'; //incremento é feito antes da interpretação da instrução//result:8
    echo "O valor atualizado é $a"; //result:8
    ?>

<h3>Pós-decremento</h3>
    <?php
   $a = 7;
    echo "O valor contido em a é $a <br/>";
    echo 'O valor contido em a previamente do decremento, é ' . --$a . '<br/>'; //decremento é feito antes da interpretação da instrução//result:6
    echo "O valor atualizado é $a"; //result:6
    ?>

    <h3>Pré-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br/>";
    echo 'O valor contido em a previamente do decremento, é ' . --$a . '<br/>'; //decremento é feito antes da interpretação da instrução//result:6
    echo "O valor atualizado é $a"; //result:6
    ?>
</body>

</html>