<?php
// Criando a class Livro
class Livro {
    // Criando as propriedades
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    // Criando os metodos com geradores getters e setters atraves da extensão 'PHP 8 Getter & Setter'.
    public function getTitulo(): string
    {
        return $this->titulo;
    }

   
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

  
    public function getAutor(): string
    {
        return $this->autor;
    }


    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }


    public function setPaginas(int $paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }
}