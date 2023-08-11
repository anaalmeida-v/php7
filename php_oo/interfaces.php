<?php
interface EquipamentoEletronicoInterface
{
    public function ligar();
    public function desligar();
}
//----------------------
class Geladeira implements EquipamentoEletronicoInterface
{
    public function abrirPorta()
    {
        echo 'Abrir a porta';
    }
    public function ligar()
    {
        echo 'ligar';
    }
    public function desligar()
    {
        echo 'desligar';
    }
}
class TV implements EquipamentoEletronicoInterface
{
    public function trocarCanal()
    {
        echo 'Trocar canal';
    }
    public function ligar()
    {
        echo 'Ligar';
    }
    public function desligar()
    {
        echo 'Desligar';
    }
}
$x = new Geladeira();
$y = new TV();

//-----------------------------------
interface Mamifero
{
    public function respirar();
}
interface Terrestre
{
    public function andar();
}
interface Aquatico
{
    public function nadar();
}

class Humano implements Mamifero, Terrestre
{
    public function respirar()
    {
        echo 'Respirar';
    }
    public function andar()
    {
        echo 'Andar';
    }
    public function conversar()
    {
        echo 'Conversar';
    }
}

class Baleia implements Mamifero, Aquatico
{
    public function respirar()
    {
        echo 'Respirar';
    }

    public function nadar()
    {
        echo 'Nadar';
    }
    protected function esguichar()
    {
        echo 'Esguichar';
    }
}

//------------------------

interface Animal
{
    public function comer();
}

interface Ave extends Animal
{
    public function voar();
}

class Papagaio implements Ave
{
    public function voar()
    {
        echo 'Voar';
    }
    public function comer()
    {
        echo 'Comer';
    }
}
?>