<?php
//print_r($_POST);

class Mensagem
{
    private $para = null;
    private $assunto = null;
    private $mensagem = null;
    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function mensagemValida()
    {
        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            //empty verifica se variável está vazia
            return false; //mensagem não é válida
        }
        return true; //se não, mensagem é válida
    }
}
$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']); //executa método set, seta valor que vem da superglobal post, índice definido pelo name dos campos do formulári o
$mensagem->__set('assunto', $_POST['assunto']); //atributo do objeto mensagem e valores que serão atribuídos para esses respectivos atributos
$mensagem->__set('mensagem', $_POST['mensagem']);

//print_r($mensagem);

if ($mensagem->mensagemValida()) { //se mensagem for válida (todos os campos estiverem preenchidos)
    echo 'Mensagem válida';
} else {//pelo menos um dos campos não está preenchido
    echo 'Mensagem inválida';
}
?>