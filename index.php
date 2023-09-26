<?php 
// Importando as Classes
require_once 'src/Livro.php';
require_once 'src/Tecnico.php';
require_once 'src/Programacao.php';
require_once 'src/Didatico.php';

// Criação de objeto Tecnico
$tecnico = new Tecnico();
$tecnico->setTitulo('Percy Jackson - A maldição do titã');
$tecnico->setAutor('Rick Riordan');
$tecnico->setPaginas(336);

// Obtendo o formato
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
    <p><strong>Título:</strong> <?= $tecnico->getTitulo(); ?></p>
    <p><strong>Autor:</strong> <?= $tecnico->getAutor(); ?></p>
    <p><strong>Páginas:</strong> <?= $tecnico->getPaginas(); ?></p>
    <p><strong>Formatos:</strong> <?= implode(", ", $formato); ?></p>
    <hr>

    <h1>Informações do Livro de Programação</h1>
    <p><strong>Título:</strong> <?= $livroProgramacao->getTitulo(); ?></p>
    <p><strong>Autor:</strong> <?= $livroProgramacao->getAutor(); ?></p>
    <p><strong>Páginas:</strong> <?= $livroProgramacao->getPaginas(); ?></p>
    <p><strong>Área:</strong> <?= $livroProgramacao->getArea(); ?></p>
    <hr>

    <h1>Informações do Livro Didatico</h1>
    <p><strong>Título:</strong> <?= $tituloDidatico; ?></p>
    <p><strong>Autor:</strong> <?= $autorDidatico; ?></p>
    <p><strong>Páginas:</strong> <?= $paginasDidatico; ?></p>
    <p><strong>Disciplina:</strong> <?= $disciplinaDidatico; ?></p>
    <p><strong>Nível:</strong> <?= $nivelDidatico; ?></p>

</body>

</html>