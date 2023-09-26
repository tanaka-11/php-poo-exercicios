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
    $livro->setPaginas('300');    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 01 - Livro</title>

</head>

<body>
<div class="artboard">
 <div class="card">

  <div class="card__side card__side--back">
   <div class="card__cover">
    <h4 class="card__heading">
     <span class="card__heading-span">_Tanaka11_</span>
    </h4>
   </div>
   <div class="card__details">
        <ul>
            <li><?=$livro->getAutor()?></li>
            <li><?=$livro->getTitulo()?></li>
            <li><?=$livro->getPaginas()?></li>
        </ul>    
   </div>
  </div>

  <div class="card__side card__side--front">
   <div class="card__theme">
    <div class="card__theme-box">
     <!-- <p class="card__subject">Tanaka</p> -->
     <!-- <p class="card__title">Bia</p> -->
    </div>
   </div>
  </div>

 </div>
</div>

</body>

</html>