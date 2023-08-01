<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //void - pois não tem retorno
    function exibirBoasVindas()
    {
        echo 'Bem vindo ao curso de PHP!<br/>';
    }
    exibirBoasVindas();

    //return(com retorno)
    function calcularAreaTerreno($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        return $area;
    }
    //echo calcularAreaTerreno(2,3);//como está sendo feita uma multiplicação, valores precisam ser passados obrigatoriamente
    $resultado = calcularAreaTerreno(20, 10);
    echo $resultado
        ?>
</body>

</html>