<?php include("cabecalho.php");?>
    <h1>Nova Nota de Texto</h1>
    <form>
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
                <td><input class="form-control" type="text" name="corpo-nota"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Criar Nota</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>        
