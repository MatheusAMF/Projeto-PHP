<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/incluirController.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="hostname" name="hostname" placeholder="hostname" required>
                <input class="form-control" type="text" id="ip" name="ip" placeholder="ip" required>
                <input class="form-control" type="text" id="tipo" name="tipo" placeholder="tipo" required>
                <input class="form-control" type="text" id="fabricante" name="fabricante" placeholder="fabricante" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>
