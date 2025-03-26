<?php
$titulo = '';
include './includes/header.php';
require './classes/filmes.php';

$filmes = new Filmes();
$dadosFilmes = $filmes->exibirListaFilmes();

include './includes/filme_lista.php';
include './includes/footer.php';