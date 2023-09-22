<?php 
    // Importando a Classe
    require_once 'src/Livro.php';

    // Guardando a classe
    $livro = new Livro;
    
    // Metodos setter
    $livro->setTitulo('Percy Jackson');
    $livro->setAutor('Rick Riordan');
    $livro->setPaginas('336');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 01 - Livro</title>

</head>

<body>
    <!-- Metodo Getter -->
    <ul>
        <li>Titulo: <?=$livro->getTitulo()?></li>
        <li>Autor: <?=$livro->getAutor()?></li>
        <li>Paginas: <?=$livro->getPaginas()?></li>
    </ul>
</body>

</html>