<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //definindo variáveis constantes
    define('BD_URL', 'endereco_bd_dev'); //essa função precisa ser passada com dois valores(nomedavariavel, valordavariavel)
    //usar caracteres maiúsculos é uma boa prática
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');

    //define('BD_URL', 'endereco_bd_prod'); - não pode ser alterado

    echo BD_URL . '<br/>';
    echo BD_USUARIO . '<br/>';
    echo BD_SENHA . '<br/>';

    ?>
</body>

</html>