<?php
require_once("../model/banco.php");

class UpdateController {

    private $editar;
    private $hostname;
    private $ip;
    private $tipo;
    private $fabricante;
    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->find($id);
        $this->id = $row['id'];
        $this->hostname = $row['hostname'];
        $this->ip = $row['ip'];
        $this->tipo = $row['tipo'];
        $this->fabricante = $row['fabricante'];
    }
    public function editarFormulario($id,$hostname,$ip,$tipo,$fabricante){
        if($this->editar->update($id,$hostname,$ip,$tipo,$fabricante) == TRUE){
        echo "<script>alert('Registro editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
        echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getId() {
        return $this->id;
    }
    public function getHostname() {
        return $this->hostname;
    }
    public function getIp() {
        return $this->ip;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getFabricante() {
        return $this->fabricante;
    }
}
$id = filter_input(INPUT_GET, 'id');
$editar = new UpdateController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['id'], $_POST['hostname'],$_POST['ip'],$_POST['tipo'],$_POST['fabricante']);
}
?>

