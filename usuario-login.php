<?php

include './includes/header.php';

//echo '<pre>';
//var_dump($_SERVER);

if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)){

    $usuarioForm = $_POST['usuario'];
    $senhaForm = $_POST['senha'];

    $dsn = 'mysql:dbname=bd_cinebox;host=localhost';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);
    $script = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioForm}' AND senha = '{$senhaForm}'";
    
    $resultado = $banco->query($script)->fetch();

    if(!empty($resultado) && $resultado != false){
        $selectUser = "SELECT * FROM tb_pessoa WHERE id = {$resultado['id_pessoa']}";
        $dadosUser = $banco->query($selectUser)->fetch();

        session_start();

        $_SESSION['id_pessoa'] = $dadosUser['id_pessoa']; 
        $_SESSION['nome'] = $dadosUser['nome']; 
        $_SESSION['ano_nascimento'] = $dadosUser['ano_nascimento']; 
        $_SESSION['telefone_1'] = $dadosUser['telefone_1']; 

        header('location:usuario.php');
    } else {
        echo '<script>
        alert("Usuário ou senha inexiststentes.")
        window.location.replace("usuario-login.php")
        </script>
        '; 
    }
} 

include './includes/user_login.html';

include_once './includes/footer.php';
