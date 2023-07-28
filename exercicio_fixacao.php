<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Exercicio 1 - Doação de sangue</h1>
    <h4>Será que você atende aos requisitos necessários para doar sangue?</h4>
    <?php
    $idade = 17;
    $peso = 51;

    if (($idade >= 16 || $idade <= 69) && $peso >= 50) {
        echo 'Atende aos requisitos';
    } else {
        echo 'Não atende aos requisitos';
    }
    ?>

    <h1>Exercicio 2 - Cálculo do imposto de renda com base no salário</h1>
    <?php
    function impostoRenda($salario)
    {
        if ($salario <= 1903.98) {
            $imposto = 0;
        } else if ($salario >= 1903.99 && $salario <= 2826.65) {
            $imposto = ($salario * 7.5) / 100;
        } else if ($salario >= 3751.06 && $salario <= 4664.68) {
            $imposto = ($salario * 15) / 100;
        } else {
            $imposto = ($salario * 27.5) / 100;
        }
        return $imposto;
    }
    echo impostoRenda(2000);
    ?>
</body>

</html>