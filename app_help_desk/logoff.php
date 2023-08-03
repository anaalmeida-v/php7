<?php
session_start();

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//remover índices do array de sessão
//unset(); - espera o array e o índice deve ser eliminado - não é exclusiva da super global session, serve para remover índices de qlqr array.
unset($_SESSION['x']);
//tem inteligência de remover o índice apenas se existir (se for passado algum inexistente, não dará erro)

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//destruir a variável de sessão completamente
//session_destroy() - remove todos os índices contidos dentro da superglobal session

session_destroy();//será destruída
//forçar um redirecionamento - gera nova req HTTP para o servidor, sendo que nessa nova req as variáveis não estarão mais disponíveis

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php');
?>