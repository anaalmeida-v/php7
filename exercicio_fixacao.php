<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Doação de sangue</h1>
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
</body>

</html>