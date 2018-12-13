<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("banco-nota.php");

    if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){
    ?>
        <p class="alert-success">Nota apagada com sucesso!</p>
    <?php
    }

    $notas = listNota($conexao);
    foreach($notas as $nota):
    ?>
    <article class="nota">
        <div class="lados">
            <div class="lado-direito">
                <h3><?=$nota['titulo'];?></h3>
            </div>
            <div class="lado-esquerdo">
                <div class="icones">
                    <a class="botao" href="nota-fomulario-editar.php?nota_id=<?=$nota['nota_id']?>"><i class="far fa-edit"></i></a>
                    <form action="nota-deletar.php" method="post">
                        <input type="hidden" name="id" value="<?=$nota['nota_id']?>">
                        <button class="botao"><i class="far fa-trash-alt"></i></button>
                    </form> 
                </div>
            </div>
        </div>
        <p>by <?=$nota['autor']?></p>
        <p><?=inverteData($nota['data_postagem']);?></p>
        <p class="descricao"><?=$nota['descricao'];?></p>
        
    </article>
        
    <hr/>
    <?php
    endforeach

    ?>
<?php include("rodape.php");?>        
