<?php
//modelo
class Funcionario
{
    //class - é seguido um padrão onde a primeira letra da palavra é maiúscula, isso segue não importa quantas palavras houver

    //atributos
    //primeira palavra sempre minúscula, mas se houver mais de uma, a/s outra/s começam com letra maiúscula
    public $nome = 'José';
    public $telefone = '11 99999-8888';
    public $numFilhos = 2;

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

//criando objeto com base no modelo Funcionário e atribuindo ele a variável $y
//a partir dessa variável estamos recebendo os atributos e métodos do objeto

//acessando atributos ou métodos(->):
echo $y->resumirCadFunc(); //exibindo resumo do cadastro do funcionario
echo '<br/>';
$y->modificarNumFilhos(3); //modificando num de filhos
echo $y->resumirCadFunc(); //exibindo  cadastro novamente (com informação de numFilhos atualizada)
echo '<hr/>';

//nova instância de objeto / novo funcionário
$x = new Funcionario();
echo $x->resumirCadFunc();
echo '<br/>';
echo $x->modificarNumFilhos(1);
echo $x->resumirCadFunc();
?>