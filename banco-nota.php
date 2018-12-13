<?php
    function inverteData($data){
        if(count(explode("/",$data)) > 1){
            return implode("-",array_reverse(explode("/",$data)));
        }elseif(count(explode("-",$data)) > 1){
            return implode("/",array_reverse(explode("-",$data)));
        }
    }
    function dataFormulario($data){
        $dataFormatada = date("Y-m-d", strtotime($data));
        return $dataFormatada;
    }
    
    function insertNota($conexao, $titulo, $autor, $data_postagem, $descricao) {
        $query = "insert into nota (titulo, autor, data_postagem, descricao) values ('{$titulo}', '{$autor}', '{$data_postagem}', '{$descricao}')";
        return mysqli_query($conexao, $query);
    }

    function deleteNota($conexao, $id){
        $query = "delete from nota where nota_id = {$id}";
        return mysqli_query($conexao, $query);
    }
    
    function listNota($conexao){
        $notas = array();
        $resultado = mysqli_query($conexao
        , "select * from nota");
        while($nota = mysqli_fetch_assoc($resultado)){
            array_push($notas, $nota);
        }
        return $notas;
    }

    function buscaNota($conexao, $id){
        $query = "select * from nota where nota_id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function editaNota($conexao, $id, $titulo, $autor, $data, $descricao){
        $query = "update nota set titulo = '{$titulo}', autor = '{$autor}', data_postagem = '{$data}', descricao = '{$descricao}' where nota_id = '{$id}'";
        return mysqli_query($conexao, $query);
    }
?>