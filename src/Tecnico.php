<?php
require_once 'src/Livro.php';
class Tecnico extends Livro {
    private array $formato = ["digital", "físico"];

    // Convertendo a fuction com o retorno string, e passando o implode. (Se continuar como array teremos que trabalhar com loop's)
    public function getFormato(): string
    {
        return implode(", ", $this->formato);
    }

    public function setFormato(array $formato): self
    {
        $this->formato = $formato;
        return $this;
    }
}

