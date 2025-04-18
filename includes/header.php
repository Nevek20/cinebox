<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if(isset($titulo) && !empty ($titulo)){
            echo $titulo;
        } else {
            echo 'CineBox';
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/carrosel.css">
    <link rel="stylesheet" href="Assets/css/filmes.css">
    <link rel="stylesheet" href="Assets/css/usuario.css">
    <link rel="stylesheet" href="Assets/css/login.css">
    <link rel="stylesheet" href="Assets/css/detalhes.css">
    <link rel="stylesheet" href="Assets/css/filtro.css">
</head>

<body>
    <header>
        <nav class="menu_perfil">
            <a href="#" class="logo">
                <h1>Cine Box</h1>
            </a>
            <ul class="menu">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./listarfilmes.php">Filmes</a></li>
                <li><a href="./sobre.php">Sobre</a></li>
            </ul>

            <ul class="menu-icones">
                <li><a href="#"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="#"><i class="bi bi-cart3"></i></a></li>
                <li><a href="usuario.php"><i class="bi bi-person-circle"></i></a></li>
            </ul>

            <!-- Hamborgar -->
            <button class="menu-oculto" onclick="javascript:abrirNav()">
                <i class="bi bi-list"></i>
            </button>
            <div id="offcanvas" class="menu-oculto" onclick="javascript:fecharNav()">
                <button class="fechar">
                    <i class="bi bi-x"></i>
                </button>
                <a href="index.php">Inicio</a>
                <a href="listarfilmes.php">Filmes</a>
                <a href="sobre.php">Sobre</a>
            </div>
        </nav>
    </header>