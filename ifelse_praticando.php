<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $usuariopossui_cartaoloja = true;
    $valor_compra = 225;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($usuariopossui_cartaoloja && $valor_compra >= 100) {
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?php
        if ($usuariopossui_cartaoloja) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor da compra:
        <?= $valor_compra ?>
    </p>

    <p>Recebeu desconto no frete?
        <?php
        if ($recebeu_desconto_frete) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor do frete:
        <?= $valor_frete ?>
    </p>
</body>

</html>