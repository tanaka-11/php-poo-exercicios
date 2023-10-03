<?php
// Criação do namespace para utilização do composer
namespace Livros;

require_once 'Tecnico.php';

class Programacao extends Tecnico {
    private string $area;

    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;
        return $this;
    }
}