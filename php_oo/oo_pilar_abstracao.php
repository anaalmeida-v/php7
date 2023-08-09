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

    //getters e setters
    function setNome($nome)
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
    }

    //métodos - na prática são funções
    //padrão de definição de nomes segue mesma regra da definição de variáveis-atributos
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filho(s)";
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
$y->setNome('Jose');
$y->setNumFilhos(2);
echo $y->resumirCadFunc();
//criando objeto com base no modelo Funcionário e atribuindo ele a variável $y
//a partir dessa variável estamos recebendo os atributos e métodos do objeto
echo '<br/>';
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) ';

//acessando atributos ou métodos(->):
//echo $y->resumirCadFunc(); //exibindo resumo do cadastro do funcionario
//$y->modificarNumFilhos(3); //modificando num de filhos
//echo $y->resumirCadFunc(); //exibindo  cadastro novamente (com informação de numFilhos atualizada)
echo '<hr/>';

//nova instância de objeto / novo funcionário
$x = new Funcionario();
$x->setNome('Maria');
$x->setNumFilhos(0);
echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) ';


?>