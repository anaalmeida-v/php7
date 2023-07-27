<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //gettype() => retorna o tipo da variável -> importante nesse momento para debug
    //$valor = 10;
    //$valor2 = (float) $valor;//float, double
    //$valor2 = (string) $valor;
    $valor = true;
    //$valor2=(int)$valor;//preserva apenas parte inteira
    //$valor2=(string)$valor;//preserva apenas parte inteira
    $valor2 = (string) $valor; //boolean ou bool -  boolean para int retorna um ou zero
    //fato da variável representar um valor válido retorna true na conversão para bool- caso false não retorna nada
    $valor3=(int)$valor2;

    echo $valor . '' . gettype($valor);
    echo '<br/>';
    echo $valor2 . '' . gettype($valor2);
    echo '<br/>';
    echo $valor3 . '' . gettype($valor3);
    ?>
</body>

</html>