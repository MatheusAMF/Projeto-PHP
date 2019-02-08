<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" id="form" class="col-10" action="../controller/hashController.php">
            <div class="form-group">
                Digite o texto:
                <textarea class="form-control" type="text" id="texto" name="texto"> </textarea>
                Digite um hash:
                <input class="form-control" type="text" id="hash" name="hash">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info" name="btn_hash">Retornar Rash</button>
            </div>
        </form>
    </div>
</body>

</html>