<?php
require_once("../libs/Net/SSH2.php");
require_once("../model/banco.php");
class SSHController{
    public function __construct($id){  
        $this->$test = new Banco();
    }
    public function ConexaoSSH(){
        $row = $this->test->find($id);
        $this->hostname = $row['hostname'];
        $ssh = new Net_SSH2(hostname);
        if (!$ssh->login($_POST["usuario"], $_POST["senha"])) {
            echo "<script>alert('Login falhou!');history.back()</script>";
        }
    }
}
?>