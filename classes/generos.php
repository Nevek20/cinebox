<?php

class Generos{
    public $conexaoBanco;

    public function __construct()
    {
        $dsn = 'mysql:dbname=bd_cinebox;host=localhost';
        $user = 'root';
        $password = '';

        $this->conexaoBanco = new PDO($dsn, $user, $password);
    }
    public function consultarListaGeneros()
    {
        $script = "SELECT * FROM tb_generos";

        return $this->conexaoBanco->query($script)->fetchAll();
    }
    public function consultarGeneroByIdFilme($id_filme)
    {
        $script = "SELECT * FROM tb_generos
                    INNER JOIN tb_filme_genero
                    ON tb_filme_genero.genero_id = tb_generos.id
                    WHERE tb_filme_genero.filme_id = {$id_filme}";
                    
        return $this->conexaoBanco->query($script)->fetchAll();
    }
}