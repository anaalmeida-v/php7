<?php
session_start(); //quando se trabalha com sessão é fundamental executar essa função, antes de qualquer instrução que emita uma saída de dados no navegador

//variável verifica se a autenticação foi realizada
$usuarios_autenticado = false; //false pois vira true apenas se entrar na condição verdadeira
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = [1 => 'Administrativo', 2 => 'Usuário'];

//usuários do sistema
$usuarios_app = [
    ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
    ['id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
];

foreach ($usuarios_app as $user) {
    $user['email'];
    $user['senha'];

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) { //verifica se senha e email declaras na variável corresponde as que foram passadas no formulário
        $usuarios_autenticado = true; //fica true pois não há a necessidade da autenticação do usuário não é necessária
        $usuario_id = ($user['id']);
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if ($usuarios_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id; //informação de id ficará disponível no escopo global da aplicação.
    $_SESSION['perfil_id'] = $usuario_perfil_id;
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