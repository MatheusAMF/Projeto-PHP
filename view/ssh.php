<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/sshController.php" id="form" name="form" class="col-10" method="post">
            <div class="form-group">
                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="usuario" required>
                <input class="form-control" type="text" id="senha" name="senha" placeholder="senha" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Autenticar</button>
            </div>
        </form>
    </div>
</body>

</html>