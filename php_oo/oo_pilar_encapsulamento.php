<?php
class Pai
{
    private $nome = 'Aninha';
    protected $sobrenome = 'Almeida';
    public $humor = 'Feliz';

    public function __get($attr)
    {
        return $this->$attr;
    }
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    private function executarMania()
    {
        echo 'Assobiar';
    }
    protected function responder()
    {
        echo 'Oi';
    }
    public function executarAcao()
    {
        $x = rand(1, 10);
        if ($x >= 1 && $x <= 8) {
            $this->responder();
        } else {
            $this->executarMania();
        }
    }
}

class Filho extends Pai //filho herda todos o s atributos e métodos public e protected
{
    public function __construct()
    {
        //exibir os métodos do objeto
        echo '<pre>';
        print_r(get_class_methods($this)); //espera receber por parâmetro um objeto e retorna um array com a relação de métodos internos desse objeto
        echo '</pre>';
    }
    private function executarMania()
    {
        echo 'Cantar';
    }
    protected function responder()
    {
        echo 'Olá';
    }
    public function x()
    {
        $this->executarMania();
    }
}

/*
$pai = new Pai();
//echo $pai->humor;
echo $pai->executarAcao();*/

$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '</pre>';

$filho->executarAcao();
echo '<br/>';
$filho->x();
?>