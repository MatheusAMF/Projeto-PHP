<?php require_once("../controller/listController.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
   <?php include("menu.php"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>HostName</th>
                <th>IP</th>
                <th>Tipo</th>
                <th>Fabricante</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php new listController(); ?>

        </tbody>
    </table>
</body>
</html>