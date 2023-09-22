<?php 
    // Importando a Classe
    require_once 'src/Livro.php';

    // Guardando a classe
    $livro = new Livro;

    // Métodos com o return this/self permitem ENCADEAMENTO nas chamadas
    // $livro->setTitulo('Tanaka')->setAutor('Eu');

    // Sintaxe 1 por 1
    $livro->setTitulo('Tanaka');
    $livro->setAutor('Eu');    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 01 - Livro</title>

</head>

<body>
  
</body>

</html>