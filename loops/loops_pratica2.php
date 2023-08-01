<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $funcionarios = [
        ['nome' => 'João', 'salario' => 2500],
        ['nome' => 'Maria', 'salario' => 3000],
        ['nome' => 'Júlia', 'salario' => 2200],
    ];

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    //recuperando índice
    foreach ($funcionarios as $idx => $funcionario) { //é passado um parâmetro entre a variável e o array, depois do 'as', é separado por '=>' indicando que os dois tem funções distintas
    
        foreach ($funcionario as $idx2 => $valor) {
            echo "$idx2 - $valor <br/>";//id's e dados do funcionario
        }
        echo '<hr/>';
    }
    ?>
</body>

</html>