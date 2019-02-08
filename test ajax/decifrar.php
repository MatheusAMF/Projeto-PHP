<?php
require_once('../controller/criptoController.php');
$string = $_POST['string'];
$classe = new CriptoController();
$decriptografia = $classe->cifraDescrip($string);
echo $decriptografia;
?>
