<?php
class Pessoa
{
    public $nome = null;
    function __construct($nome)
    {
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct()
    {
        echo 'Objeto removido';
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function correr()
    {
        //return $this->nome . ' está correndo';
        return $this->__get('nome') . ' está correndo';
    }
}
$pessoa = new Pessoa('Jorge'); //a partir da instância do obj podem ser passados parâmetros(são interceptados pelo método construct)
echo '<br/>Nome: ' . $pessoa->__get('nome');
echo '<br/>' . $pessoa->correr();

echo '<br/>';

unset($pessoa); //forçar de forma proposital a remoção desse objeto
?>