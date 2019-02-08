<?php
require_once("../model/banco.php");
class ListController{
    private $lista;
    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }
    private function criarTabela(){
        $row = $this->lista->list();
    }
}
?>