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

    <h1>Exercício 3 - Criar script que gera array aleatório através de um laço de repetição</h1>
    <?php
    $elementos = []; //array onde serão incluídos os números
    
    while (count($elementos) <= 5) { //enquanto 'elementos' for menor ou igual a 5
        $aleatorio = rand(1, 60); //variável 'aleatorio' gera um número aleatório entre 1 e 60
    
        if (!in_array($aleatorio, $elementos)) { //verificando se número aleatório está no array('!'se não estiver..)
            $elementos[] = $aleatorio; //executa a adição do mesmo no array
        }
    }
    print_r($elementos); //exibindo elementos
    ?>
</body>

</html>