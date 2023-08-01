<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //false (true/false) - tipo variável boolean
    //null e empty - valores especiais
    
    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    //valores null
    if (is_null($funcionario1)) { //função nativa do php
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<br/>';

    if (is_null($funcionario2)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<br/>';

    if (is_null($funcionario3)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<hr/>';

    //valores empty
    if (empty($funcionario1)) { //função nativa do php
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não está vazia';
    }

    echo '<br/>';

    if (empty($funcionario2)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não está vazia';
    }

    echo '<br/>';

    if (empty($funcionario3)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não está vazia';
    }

    //uma variável está vazia quando de fato não tem nenhum valor ou quando está com valor null
    //uma variável é null, quando ela tiver aquele valor atribuído a ela
    ?>
</body>

</html>