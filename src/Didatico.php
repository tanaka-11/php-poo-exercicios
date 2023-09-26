<?php
require_once 'Tecnico.php';

final class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel = ["superior", "médio", "fundamental"];

    public function getDisciplina(): string {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina): self {
        $this->disciplina = $disciplina;
        return $this;
    }

    public function getNivel(): array {
        return $this->nivel;
    }
}
?>