<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $texto = 'Curso completo de PHP<br/>';
    echo $texto;

    echo '<hr/>';

    //string to lower
    echo ('String To Lower<br/>');
    echo strtolower($texto);

    echo '<hr/>';

    //string to upper
    echo ('String To Upper<br/>');
    echo strtoupper($texto);

    echo '<hr/>';

    //upper case first
    echo ('Upper Case First<br/>');
    echo ucfirst($texto);

    echo '<hr/>';

    //string length
    echo ('String Length<br/>');
    echo strlen($texto);

    echo '<hr/>';

    //string replace
    echo ('String Replace<br/>');
    echo str_replace('PHP', 'JavaScript', $texto); //case sensitive, a palavra tem que ser idêntica a da string da variável
    
    echo '<hr/>';

    //substr replace
    echo ('Substr Replace<br/>');
    echo substr($texto, 6, 8); //variavel, posição inicial, qtd de caracteres a sere, resgatados
    ?>
</body>
</html>