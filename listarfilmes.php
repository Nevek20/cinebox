<?php
$titulo = '';
include './includes/header.php';
require './classes/filmes.php';
require './classes/generos.php';

$filmes = new Filmes();
$dadosFilmes = $filmes->exibirListaFilmes();

$generos = new Generos();
$dadosGeneros = $generos->consultarListaGeneros();

include './includes/filmes_filtro.php';
include './includes/footer.php';