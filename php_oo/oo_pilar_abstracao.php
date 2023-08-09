<?php
//modelo
class Funcionario
{
    //class - é seguido um padrão onde a primeira letra da palavra é maiúscula, isso segue não importa quantas palavras houver

    //atributos
    //primeira palavra sempre minúscula, mas se houver mais de uma, a/s outra/s começam com letra maiúscula
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;
    //getters e setters (overloading / sobrecarga)
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }


    /*function setNome($nome)
    {
        $this->nome = $nome;
    } //para manipular um atributo do próprio objeto basta utilizar a palavra reservada this e atribui-se a ela o valor passado por parâmetro na função
    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }

    function getNome()
    {
        return $this->nome;
    }
    function getNumFilhos()
    {
        return $this->numFilhos;
    }*/

    //métodos - na prática são funções
    //padrão de definição de nomes segue mesma regra da definição de variáveis-atributos
    function resumirCadFunc()
    {
        return $this->__get('nome') . "possui" . $this->__get('numFilhos   ') . "filho(s)";
    }

    function modificarNumFilhos($numFilhos)
    {
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
        //atribuindo ao atributo numFilhos do objeto o valor de $numFilhos que é o parâmetro recebido pelo método(modificarNumFilhos)
    }
}
//variável recebe instância da classe Funcionário
$y = new Funcionario();
$y->__set('nome', 'Jose');
$y->__set('numFilhos', 2);
echo $y->resumirCadFunc();
echo '<br/>';
//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';

//nova instância de objeto / novo funcionário
$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 0);
echo $y->resumirCadFunc();
echo '<br/>';
//echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
?>