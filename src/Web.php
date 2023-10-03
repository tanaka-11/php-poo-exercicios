<?php
// Passando o namespace
namespace Livros;

// Criando a classe com o metodo construtor
class Web extends Programacao {
    public function __construct()
    {
        echo 'Livros de Programação Web';
    }
}