<?php
    include("cabecalho.php");
    include("conexao.php");
    include("banco-nota.php");

    $id = $_POST['id'];
    deleteNota($conexao, $id);
    header("Location: nota-lista.php?removido=true");
    die();
?>