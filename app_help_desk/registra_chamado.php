<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

//fopen('arquivo.hd', 'a'); //a - abre arquivo apenas para escrita

$texto = $_POST["titulo"] ."#". $_POST["categoria"] ."#". $_POST["descricao"];
echo $texto;
?>