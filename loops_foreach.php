<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>

<body>
    <?php
    $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {//chaves encapsulam o conteúdo que será executado para cada um dos elementos dentro do array
        //array + as + definicao de variável que receberá valor contido em cada item do array
        echo "$item ";

        if ($item == 'mesa') {
            echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
        }
        echo '<br/>';
    }
    ?>
</body>

</html>