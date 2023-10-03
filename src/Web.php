<?php
// Passando o namespace
namespace Livros;

// Fazendo o require da classe que vamos herdar os recursos
require_once 'Programacao.php';

// Criando a classe
class Web extends Programacao {
    public function __construct()
    {
        echo 'Livros de Programação Web';
    }
}