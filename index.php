<?php 
require './classes/filmes.php';
require './classes/generos.php';

$titulo = 'CineBox - Inicio';
include './includes/header.php';
include './includes/banner.php'; 

$filmes = new Filmes();
$dadosFilmes = $filmes->exibirListaFilmes(8);

$generos = new Generos();
// $dadosGeneros = $generos->consultarListaGeneros();

include './includes/filme_lista.php';

include './includes/footer.php';