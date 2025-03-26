<?php 

class Filmes
{
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
}
