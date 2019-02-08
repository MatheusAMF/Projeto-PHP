<?php
require_once('../controller/criptoController.php');
$string = $_POST['string'];
$classe = new CriptoController();
$criptografia = $classe->cifraCrip($string);
echo $criptografia;
dd(1);
?>
