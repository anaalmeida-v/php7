<?php
session_start();
//abrindo arquivo
$arquivo = fopen('../../../app_help_desk/arquivo.hd', 'a'); //a - abre arquivo apenas para escrita

/*if (isset($_POST['categoria'])) {
    $categoriaValue = $_POST['categoria'];
} else {
    echo "As variáveis não existem no array";
}*/

$titulo = str_replace('#', '-', $_POST['titulo']); //substituindo cerquilha por traço no índice 'titulo' no método post
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
//implode '#', $_POST 
//função nativa do php que com base em um determinado caractere, transforma array em string

//escrevendo texto do arquivo
$texto = $_SESSION['id'] . '#' . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL; //php_eol - fim de linha (para assim, quando forem adicionados outros textos haver a quebra de linha)

//exibindo texto do arquivo
fwrite($arquivo, $texto);
//fwrite - espera 2 parâmetros (referência do arquivo que foi aberto(arquivo.hd), oque será escrito dentro desse arquivo)

//fechando arquivo 
fclose($arquivo);
//echo $texto;
header('Location: abrir_chamado.php'); //encaminhando para abrir_chamado.php novamente
?>