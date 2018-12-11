<?php
    function insertNota($conexao, $titulo, $autor, $data_postagem, $descricao) {
        $query = "insert into nota (titulo, autor, data_postagem, descricao) values ('{$titulo}', '{$autor}', '{$data_postagem}', '{$descricao}')";
        return mysqli_query($conexao, $query);
    }
?>