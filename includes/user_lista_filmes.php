<?php    
$dsn = 'mysql:dbname=bd_cinebox;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);
    
$select = 'SELECT * FROM tb_filmes';
$resultado = $banco->query($select)->fetchALL();

//echo '<pre>';
//var_dump ($resultado);
?>  
    <?php foreach($resultado as $lista) { ?>
    <div class="row desc-filme">
        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="./assets/img/poster/jojo-rabbit.png" alt="" class="desc-foto">
        </div>
        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title"><?= $title ['nome']?></h3>
            <p class="desc-descricao">
                Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
            </p>
        </div>
        <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Editar
            </a>
            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
                Excluir
            </a>
        </div>
    </div>
    <?php } ?>