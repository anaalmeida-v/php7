<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $registros = [
        ['título' => 'Título notícia 3', 'conteúdo' => 'Conteúdo notícia 1'],
        ['título' => 'Título notícia 2', 'conteúdo' => 'Conteúdo notícia 2'],
        ['título' => 'Título notícia 3', 'conteúdo' => 'Conteúdo notícia 3'],
        ['título' => 'Título notícia 4', 'conteúdo' => 'Conteúdo notícia 4'],
    ];

    echo '<pre>';
    //print_r($registros);
    echo '</pre>';
    echo '<br/><br/><br/>';
    $idx = 0;

    //count -> conta qtd de elementos de array
    echo 'O array possui: ' . count($registros) . ' registros';
    echo '<br/>';
    

    ?>
</body>

</html>