<?php
class Banco{

    protected $mysqli;
    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli('127.0.0.1', 'root' , '', 'db_dispositivos'); 
    }

    public function create($hostname, $ip, $tipo, $fabricante){
        $consulta = $this->mysqli->prepare("INSERT INTO dispositivo (hostname, ip, tipo, fabricante) VALUES ('$hostname', '$ip', '$tipo', '$fabricante')");
        if($consulta->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function list(){
        $resultado = $this->mysqli->query("SELECT * FROM dispositivo");
        $item = array();
        while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
            $item = $row;
            echo "<tr>";
            echo "<th>".$item['id'] ."</th>";
            echo "<td>".$item['hostname'] ."</td>";
            echo "<td>".$item['ip'] ."</td>";
            echo "<td>".$item['tipo'] ."</td>";
            echo "<td>".$item['fabricante'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$item['id']."'>Editar</a> <a class='btn btn-danger' href='../controller/deleteController.php?id=".$item['id']."'>Excluir</a> <a class='btn btn-primary' href='ssh.php?id=".$item['id']."'>SSH</a></td>";
            echo "</tr>";
        }
    }
    public function delete($id){
        $consulta = $this->mysqli->query("DELETE FROM dispositivo WHERE id = $id");
    }
    public function find($id){
        $resultado = $this->mysqli->query("SELECT * FROM dispositivo WHERE id = '" .$id."'");
        return $resultado->fetch_array(MYSQLI_ASSOC);
    }
    public function update($id, $hostname, $ip, $tipo, $fabricante){
        $consulta = $this->mysqli->prepare("UPDATE dispositivo SET hostname='$hostname', ip='$ip', tipo='$tipo', fabricante='$fabricante' WHERE id=$id");
        echo "UPDATE dispositivo SET hostname='$hostname', ip='$ip', tipo='$tipo', fabricante='$fabricante' WHERE id=$id";
        if($consulta->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>