<?php 
require './classes/filmes.php';

$titulo = 'CineBox - Inicio';
include './includes/header.php';
include './includes/banner.php'; 

$filmes = new Filmes();
$dados = $filmes->ListarFilmesBanco();

echo $dados;

include './includes/filme_lista.php';

include './includes/footer.php';