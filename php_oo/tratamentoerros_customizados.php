<?php
class MinhaExceptionCustomizada extends Exception
    //como Excepion é uma classe nativa do PHP, logo, podemos criar classes que extendem ela.
{
    private $erro = '';

    public function __construct($erro)
    {
        $this->erro = $erro;
    } //ajusta contexto para recuperar atributo 'erro' do objeto // atribui a ele o valor recebido por parâmetro no construtor
    public function exibirMensagemErroCustomizada()
    {
        echo '<div style="border: 1px solid #000; padding: 15px; background-color:red; color:write;">';
        echo $this->erro;
        echo "</div>";
    }
}

try {
    throw new MinhaExceptionCustomizada('Esse é um erro de teste');

    //Error (php)
    //Exception (programadores)
    //Customizadas (programadores)
} catch (MinhaExceptionCustomizada $e) {
    echo $e->exibirMensagemErroCustomizada();
}
?>