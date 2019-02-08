<?php
require_once("../model/banco.php");
class deleta {
    private $deleta;
    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->delete($id) == FALSE){
            echo "<script>alert('Deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>
