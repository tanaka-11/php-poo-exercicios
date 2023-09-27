<?php 
// Importando a super-classe "Livro" e suas sub-classes
require_once 'src/Livro.php';
require_once 'src/Tecnico.php';
require_once 'src/Programacao.php';
require_once 'src/Didatico.php';

// Criação do objeto "Tecnico"
$tecnico = new Tecnico();

// Atribuindo valores ao objeto "Tecnico"
$tecnico->setTitulo('Percy Jackson - A maldição do titã');
$tecnico->setAutor('Rick Riordan');
$tecnico->setPaginas(336);

// Obtendo o formato "digital" e "fisico"
$formato = $tecnico->getFormato();

// Criando uma instância da classe Programacao com valores iniciais
$livroProgramacao = new Programacao('Livro de Programação', 'Autor do Livro de Programação', 300, 'Área de Programação');

// Acessando as informações do objeto Programacao
$tituloProgramacao = $livroProgramacao->getTitulo();
$autorProgramacao = $livroProgramacao->getAutor();
$paginasProgramacao = $livroProgramacao->getPaginas();
$areaProgramacao = $livroProgramacao->getArea();

// Criando uma instância da classe Didatico com valores iniciais
$livroDidatico = new Didatico();
$livroDidatico->setTitulo('Livro Didático de Matemática');
$livroDidatico->setAutor('Autor do Livro Didático');
$livroDidatico->setPaginas(200);
$livroDidatico->setDisciplina('Matemática');

// Acessando as informações do objeto Didatico
$tituloDidatico = $livroDidatico->getTitulo();
$autorDidatico = $livroDidatico->getAutor();
$paginasDidatico = $livroDidatico->getPaginas();
$disciplinaDidatico = $livroDidatico->getDisciplina();
$nivelDidatico = implode(", ", $livroDidatico->getNivel());

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 01 - Livro</title>

</head>

<body>
    <h1>Informações do Livro Técnico</h1>
    <p>
        <b>Título:</b> <?= $tecnico->getTitulo() ?>
    </p>
    <p>
        <b>Autor:</b> <?= $tecnico->getAutor() ?>
    </p>
    <p>
        <b>Páginas:</b> <?= $tecnico->getPaginas() ?>
    </p>
    <p>
        <b>Formatos:</b> <?= implode(", ", $formato) ?>
    </p>
    <hr>

    <h1>Informações do Livro de Programação</h1>
    <p>
        <b>Título:</b> <?= $livroProgramacao->getTitulo() ?>
    </p>
    <p>
        <b>Autor:</b> <?= $livroProgramacao->getAutor() ?>
    </p>
    <p>
        <b>Páginas:</b> <?= $livroProgramacao->getPaginas() ?>
    </p>
    <p>
        <b>Área:</b> <?= $livroProgramacao->getArea() ?>
    </p>
    <hr>

    <h1>Informações do Livro Didatico</h1>
    <p>
        <b>Título:</b> <?= $tituloDidatico ?>
    </p>
    <p>
        <bg>Autor:</b> <?= $autorDidatico ?>
    </p>
    <p>
        <b>Páginas:</b> <?= $paginasDidatico ?>
    </p>
    <p>
        <b>Disciplina:</b> <?= $disciplinaDidatico ?>
    </p>
    <p>
        <b>Nível:</b> <?= $nivelDidatico ?>
    </p>

</body>

</html>