<?php
// Criação do namespace para utilização do composer
namespace Livros;

final class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel = ["superior", "médio", "básico"];

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }
    
    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;
        return $this;
    }

    
    public function getNivel(): array
    {
        return $this->nivel;
    }

    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;
        return $this;
    }
}
?>