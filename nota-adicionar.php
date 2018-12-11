<?php
    include("cabecalho.php");
    include("conexao.php");
    include("banco-nota.php");

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];

    $data = $_POST['data'];

    $descricao = $_POST['descricao'];
    
    if(insertNota($conexao, $titulo, $autor, $data, $descricao)) { ?>
        <p class="text-success">Nota <?= $titulo ?> foi adicionada com sucesso!</p>
    <?php } else { 
         $msg = mysqli_error($conexao);    
    ?>
        <p class="text-danger">Nota <?= $titulo?> não foi adicionada: <?=$msg?></p>
    <?php
    }
    
    
    include("rodape.php");
?>