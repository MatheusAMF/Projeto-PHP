<?php
require_once("banco.php");
class Dispositivo extends Banco {

    private $id;
    private $hostname;
    private $ip;
    private $tipo;
    private $fabricante;
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getHostname() {
        return $this->hostname;
    }
    public function setHostname($hostname) {
        $this->hostname = $hostname;
    }

    public function getIp() {
        return $this->ip;
    }
    public function setIp($ip) {
        $this->ip = $ip;
    }

    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getFabricante() {
        return $this->tipo;
    }
    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }
    public function incluir(){
        return $this->create($this->getHostName(),$this->getIp(),$this->getTipo(),$this->getFabricante());
    }
}
?> 