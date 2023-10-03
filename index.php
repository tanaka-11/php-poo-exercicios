<?php 
// Passando o use antes do require.
use Livros\{Tecnico, Programacao, Didatico, Web};

// Passando o require com o composer autoload.
require_once 'vendor/autoload.php';

// Criação dos objetos.
$livroTecnico = new Tecnico;
$livroProgramacao = new Programacao;
$livroDidatico = new Didatico;
$livroWeb = new Web;

// Metodos Setter da sub-classe(Tecnico).
$livroTecnico->setTitulo("Logica de Programação");
$livroTecnico->setAutor("M. Tanaka");
$livroTecnico->setPaginas("300");
$livroTecnico->setFormato(["digital" , "fisico"]);

// Metodos Setter da sub-classe(Programação).
$livroProgramacao->setTitulo("PHP POO - Programação Orientada a Objeto");
$livroProgramacao->setAutor("M. Tanaka");
$livroProgramacao->setPaginas("400");
$livroProgramacao->setFormato(["digital"]);
$livroProgramacao->setArea("Back-End");

// Metodos Setter da nossa sub-classe(Didatico).
$livroDidatico->setTitulo("Voleibol");
$livroDidatico->setAutor("M. Tanaka");
$livroDidatico->setPaginas("120");
$livroDidatico->setFormato(["fisico"]);
$livroDidatico->setDisciplina("Educação Fisica");
$livroDidatico->setNivel(["superior"]);

// Metodos Setter da nossa sub-classe(Web).
$livroWeb->setTitulo("HTML e CSS");
$livroWeb->setAutor("M. Tanaka");
$livroWeb->setPaginas("300");
$livroWeb->setFormato(["fisico"], ["digital"]);
$livroWeb->setArea("Programação");


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 03 - namespace e composer</title>

</head>

<body>
    <h1>Informações do Livro Tecnico</h1>
    <ul>
        <li><b>Nome do Autor: </b><?=$livroTecnico->getAutor()?></li>
        <li><b>Titulo: </b><?=$livroTecnico->getTitulo()?></li>
        <li><b>Paginas: </b><?=$livroTecnico->getPaginas()?></li>

        <!-- Como neste metodo utilizamos o implode para conventer o array numa string, poderia ser feito tabem um foreach para conseguir acessar as informações do array ou passar os colchetes logo apos os parenteses. -->
        <li><b>Formato: </b><?=$livroTecnico->getFormato()?></li>
  
    </ul>
    <hr>

    <h1>Informações do Livro de Programação</h1>
    <ul>
        <li><b>Nome do Autor:</b> <?=$livroProgramacao->getAutor()?></li>
        <li><b>Titulo:</b> <?=$livroProgramacao->getTitulo()?></li>
        <li><b>Area:</b> <?=$livroProgramacao->getArea()?></li>
        <li><b>Paginas:</b> <?=$livroProgramacao->getPaginas()?></li>
        <li><b>Formato:</b> <?=$livroProgramacao->getFormato()?></li>
        
    </ul>
    <hr>

    <h1>Informações do Livro Didatico</h1>
    <ul>
        <li><b>Nome do Autor:</b> <?=$livroDidatico->getAutor()?></li>
        <li><b>Titulo:</b> <?=$livroDidatico->getTitulo()?></li>
        <li><b>Paginas:</b> <?=$livroDidatico->getPaginas()?></li>
        <li><b>Formato:</b> <?=$livroDidatico->getFormato()?></li>
        <li><b>Disciplina:</b> <?=$livroDidatico->getDisciplina()?></li>
        
        <!-- Aqui utilizamos o outro metodo citado no exemplo do livro Tecnico acessando as informações do array com o proprio loop  -->
        <li>
            <?php foreach($livroDidatico->getNivel() as $nivel) {?>
                <b>Nivel:</b> <?=$nivel?>
            <?php } ?>
        </li>
        
    </ul>
    <hr>

    <!-- Exibição dos dados da classe Web -->
    <h1>Informações sobre o livro Web</h1>
    <ul>
        <pre> <?=var_dump($livroWeb)?> </pre>
    </ul>

</body>

</html>