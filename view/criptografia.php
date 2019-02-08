<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" id="form" class="col-10" action="../controller/criptoController.php">
            <div class="form-group">
                Digite o texto:
                <textarea class="form-control" type="text" id="texto" name="texto"> </textarea>
                <input class="col-2" type="number" id="salt" name="salt" placeholder="SALT">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="btn_cript">Criptografar</button>
                <button type="submit" class="btn btn-danger" name="btn_descript">Descriptografar</button>
            </div>
        </form>
    </div>
</body>

</html>