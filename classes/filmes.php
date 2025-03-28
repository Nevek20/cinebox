<?php 

class Filmes
{
    
    public $conexaoBanco;

    public function __construct() {
        $dsn = 'mysql:dbname=bd_cinebox; host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    public function exibirListaFilmes($limite = '')
    {
        $dsn = 'mysql:dbname=bd_cinebox;host=localhost';
        $user = 'root';
        $password = '';
        $auxScript = '';

        $banco = new PDO($dsn, $user, $password);
        
        if (!empty($limite)){
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";    
        }

        $script = "SELECT * FROM tb_filmes" . $auxScript;

        //var_dump($script);

        return $banco->query($script)->fetchALL();
    }
    public function consultarFilmesById($id){
        $select = "SELECT * FROM tb_filmes WHERE id = {$id}";

        return $this->conexaoBanco->query($select)->fetch();
    }
}
