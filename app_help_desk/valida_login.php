<?php
session_start(); //quando se trabalha com sessão é fundamental executar essa função, antes de qualquer instrução que emita uma saída de dados no navegador

//variável verifica se a autenticação foi realizada
$usuarios_autenticado = false; //false pois vira true apenas se entrar na condição verdadeira
//usuários do sistema
$usuarios_app = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
];

foreach ($usuarios_app as $user) {
    $user['email'];
    $user['senha'];

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) { //verifica se senha e email declaras na variável corresponde as que foram passadas no formulário
        $usuarios_autenticado = true; //fica true pois não há a necessidade da autenticação do usuário não é necessária
    }
}

if ($usuarios_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php'); //haverá um encaminhamento do usuário; destino: home
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro'); //haverá um encaminhamento do usuário; destino: página inicial
} //login=erro é um parâmetro que será passado para a URL

/*print_r($_GET); //GET - resgata dados
echo '<br/>';
$_GET['email'];
echo '<br/>';
$_GET['senha'];*/

/*print_r($_POST); //POST - posta dados (usuário consegue visualizar através deste método)
  echo '<br/>';
  echo $_POST['email'];
  echo '<br/>';
  echo $_POST['senha'];
*/
?>