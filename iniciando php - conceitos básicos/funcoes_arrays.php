<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    /*is_array
    $array = [];
    $retorno = is_array($array);

    if ($retorno) {
        echo "Sim, é um array";
    } else {
        echo "Não, não é um array";
    }
    
    //array_keys
    $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);//exibe índice(chaves) dos elementos do array
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';
    
    //sort
    $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'teclado', 'nootebook');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array);//true ou false - retorna true ou false se o array foi ou não ordenado
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    
    //asort  
    $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'teclado', 'nootebook');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    asort($array);//true ou false - retorna true ou false se o array foi ou não ordenado, preservando índice
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    //count
    $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'teclado', 'nootebook');
    echo '<pre>';
    print_r($array);
    echo count($array);
    echo '</pre>';

    //array_merge
    $array1 = ['osx', 'windows'];
    $array2 = ['linux'];
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>';

    //explode()
    $string = '07/12/2017';
    $array_retorno = explode('/', $string);
    echo '<pre>';
    print_r($array_retorno);
    echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    echo '</pre>';
    */

    //implode()
    $array = ['a', 'b', 'x', 'y']; //a,b,x,y
    $string_retorno = implode(',', $array);//separador + array que contém os elementos
    echo $string_retorno;
    ?>
</body>

</html>