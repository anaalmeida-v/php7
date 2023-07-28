<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $num = 7.3;
    echo ceil($num) . '<br/>'; //arredonda para cima
    //8
    
    $num = 7.3;
    echo floor($num) . '<br/>'; //arredonda para baixo
    //7
    
    $num = 7.5;
    echo round($num) . '<br/>'; //arredonda com base na fração / .0 e .4 => baixo | .5 => cima
    //8
    
    echo rand(10, 20) . '<br/>'; //gera valor aleatório de 0 até randmax(maior valor aleatório possível onde a aplicação está rodando)
    //quando coloca dois números, é gerado um valor aleatório entre eles
    echo getrandmax() . '<br/>';

    echo sqrt(25)
        ?>
</body>

</html>