<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("banco-nota.php");
    
    $id = $_GET['nota_id'];
    $nota = buscaNota($conexao, $id);
?>

    <h1>Alterando Nota</h1>
    <form action="nota-editar.php" method="post">
        <input type="hidden" name="id" value="<?=$nota['nota_id']?>">
        <table class="table">
            <tr>
                <td>Título:</td>
                <td><input class="form-control" type="text" name="titulo" value="<?=$nota['titulo']?>"></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><input class="form-control" type="text" name="autor" value="<?=$nota['autor']?>"></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input class="form-control" type="date" name="data" value="<?=dataFormulario($nota['data_postagem'])?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><textarea class="form-control" name="descricao"><?=$nota['descricao']?></textarea></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Salvar</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>        
