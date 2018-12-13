<?php
    include("cabecalho.php");
    include("conexao.php");
    include("banco-nota.php");

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $descricao = $_POST['descricao'];

    if(editaNota($conexao, $id, $titulo, $autor, $data, $descricao)){?>
        <p class="text-sucess">Nota <?=$titulo?> foi alterada!</p>
    <?php } else{
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Nota <?=$titulo?> não foi alterada: <?=$msg?></p>
    <?php
    }


    include("rodape.php");
?>