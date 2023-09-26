<?php
// Importando a super-classe para criação da sub-classe "tecnico".
require_once 'Livro.php';

class Tecnico extends Livro {
    // Criando as propriedades
    private array $formato;

    // Definindo valores padrão para a propriedade com o construtor
    public function __construct()
    {
        $this->formato = ["digital", "fisico"];
    }

    public function getFormato(): array
    {
        return $this->formato;
    }

    public function setFormato($formato): self
    {
        $this->formato = $formato;

        return $this;
    }

}
