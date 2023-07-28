<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //$lista_coisas=array();
    $lista_coisas = [];
    $lista_coisas['frutas'] = array('Banana', 'Maçã', 'Morango', 'Uva');
    $lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];//- ajustando índices

    echo '<pre>';
    print_r($lista_coisas);//recuperando array's
    echo '</pre>';

    echo '<hr/>';
    echo $lista_coisas['frutas'][3];
    echo '<br/>';
    echo $lista_coisas['pessoas'][2];
    ?>
</body>

</html>