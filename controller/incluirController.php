<?php
require_once("../model/dispositivo.php");
class IncluirController{

    private $cadastro;
    public function __construct(){
        $this->cadastro = new Dispositivo();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setHostname($_POST['hostname']);
        $this->cadastro->setIp($_POST['ip']);
        $this->cadastro->setTipo($_POST['tipo']);
        $this->cadastro->setFabricante($_POST['fabricante']);
        $resultado = $this->cadastro->incluir();
        if($resultado == true){
            echo "<script>alert('Incluido com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar!');history.back()</script>";
        }
    }
}
new IncluirController();
?> 