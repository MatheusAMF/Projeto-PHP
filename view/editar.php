<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/updateController.php");?>
    <div class="row">
        <form method="post" action="../controller/updateController.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="hostname" name="hostname" value="<?php echo $editar->getHostname(); ?>" required autofocus>
                <input class="form-control" type="text" id="ip" name="ip" value="<?php echo $editar->getIp(); ?>" required>
                <input class="form-control" type="text" id="tipo" name="tipo" value="<?php echo $editar->getTipo(); ?>" required>
                <input class="form-control" type="text" id="fabricante" name="fabricante" value="<?php echo $editar->getFabricante(); ?>" required>

            </div>
            <div class="form-group">
                <input type="hidden" id="id" name="id" value="<?php echo $editar->getId();?>">
                <button type="submit" class="btn btn-warning" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
</body>
</html>
