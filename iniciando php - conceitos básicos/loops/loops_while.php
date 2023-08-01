<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $num = 1;
    //operadores comparação / lógicos
    echo '--Início do loop --';
    while ($num < 1000) { //inicia com a palavra while, seguida de uma condição entre parênteses, seguida de comandos a serem repetidos com base na condição
        $num++;

        if ($num == 2 || $num == 6) {
            continue; //tudo oque tiver até o fechamento do bloco de repetição é descartado e passa pro próxima interação
        }

        echo "$num <br/>";

        /*if($num>100){
            break;//assim como no switch, interrompe execução do laço
        }
        */

        //enquanto break interrompe completamente a estrutura da repetição, o continue pula uma interação, indo para a seguinte, descartando o que tiver a seguir da interação continue
    
    } //repitir codificação enquanto num for <10
    
    echo '--Fim do loop --';
    ?>
</body>

</html>