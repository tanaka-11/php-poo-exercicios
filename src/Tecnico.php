<?php
// Importando a super-classe para criação da sub-classe "tecnico".
require_once 'Livro.php';

class Tecnico extends Livro {
    private array $formato = ["digital", "físico"];

    public function setFormato(array $formato): void {
        $this->formato = $formato;
    }
    
    public function getFormato(): array {
        return $this->formato;
    }

}

