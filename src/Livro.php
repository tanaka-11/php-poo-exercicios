<?php
// Criando a class abstrata Livro
abstract class Livro {
    // Criando as propriedades
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    // Criando os metodos
    
    // SET titulo
    public function setTitulo(string $titulo):void {
        $this->titulo = $titulo;
    }
    
    // GET titulo
    public function getTitulo():string {
        return $this->titulo;
    }
    
    // SET autor
    public function setAutor(string $autor):void {
        $this->autor = $autor;
    }

    // GET autor
    public function getAutor():string {
        return $this->autor;
    }

    // SET paginas
    public function setPaginas(int $paginas):void {
        $this->paginas = $paginas;
    }

    // GET paginas
    public function getPaginas():int {
        return $this->paginas;
    }
}