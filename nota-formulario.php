<?php include("cabecalho.php");?>
    <h1>Nova Nota</h1>
    <form action="nota-adicionar.php" method="post">
        <table class="table">
            <tr>
                <td>Título:</td>
                <td><input class="form-control" type="text" name="titulo"></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><input class="form-control" type="text" name="autor"></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input class="form-control" type="date" name="data"></td>
            </tr>
            <tr>
                <td></td>
                <td><textarea class="form-control" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Criar Nota</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>        
