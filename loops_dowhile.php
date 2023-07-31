<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $X = 10;
    do {
        echo "X = $x <br/>";

        $x++; //precisa ter um critério de parada para não ocasionar em um loop infinito
    
        //continue
        //break
    } while ($x < 9);
    //condicao vem depois do bloco de código a ser execultado
    
    /*while($x<9){
        echo 'Entrou no while';
    }*/
    ?>
</body>

</html>