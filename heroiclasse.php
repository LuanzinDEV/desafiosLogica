<?php

class Heroi {
    public $nome;
    public $idade;
    public $tipo;

    public function __construct($nome, $idade, $tipo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;
    }

    public function atacar() {
        switch ($this->tipo) {
            case 'mago':
                $ataque = 'usou magia';
                break;
            case 'guerreiro':
                $ataque = 'usou espada';
                break;
            case 'monge':
                $ataque = 'usou artes marciais';
                break;
            case 'ninja':
                $ataque = 'usou shuriken';
                break;
            default:
                $ataque = 'usou um ataque indefinido';
        }

        echo "O {$this->tipo} atacou usando {$ataque}\n";
    }
}

// Exemplo de uso
$heroi = new Heroi('Herói1', 30, 'mago');
$heroi->atacar();

$heroi2 = new Heroi('Herói2', 25, 'guerreiro');
$heroi2->atacar();

?>
