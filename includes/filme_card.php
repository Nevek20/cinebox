<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md-6  col-sm-12">
                <a href="filmes-consultar.php?id=<?= $value['id']?>" style="text-decoration: none;color: black">
                    <figure>
                        <img src="Assets/img/poster/<?= $value['poster'] ?>" alt="Avatar" class="foto-produto">
                        <figcaption>
                            <h4><?= $value['nome'] ?></h4>
                            <span class="preco"><?= $value['valor_ingresso'] ?></span>
                            <p class="descricao"><?= $value['descricao'] ?></p>
                        </figcaption>
                        <span class="genero">
                            <?php foreach ($generoFilme as $value2) {?>
                            <label style="background-color:#<?= $value2['cor']?>;"><?= $value2['nome'] ?></label>
                            <?php } ?>
                        </span>
                    </figure>
                </a>
            </div>