<?php
    test();
    function test(){
        $texto = $_POST['texto'];
        $hash = $_POST['hash'];
        if (CRYPT_SHA512 == 1) 
        {
            $sha = crypt($texto,'A$rounds=5000$'); 
        }
        $hmac = hash_hmac('md5', $texto, 'teste');
        $haval = hash('haval160,4', $texto);
        if (empty($hash)){
            echo "<script>alert('SHA512 com 5.000 rounds: $sha\\nHMAC: $hmac\\nHaval160,4: $haval');history.back()</script>";
        }else{
            $novo = hash($hash, $texto);
            $frase = "Hash Gerado | $novo\\n";
            if($novo == $sha){
                $frase .= 'SHA512 | Igual\\n';
            }else{
                $frase .= 'SHA512 | Diferente\\n';
            }
            if($novo == $hmac){
                $frase .= 'HMAC | Igual\\n';
            }else{
                $frase .= 'HMAC | Diferente\\n';
            }
            if($novo == $haval){
                $frase .= 'Haval160,4 | Igual\\n';
            }else{
                $frase .= 'Haval160,4 | Diferente\\n';
            }
            echo "<script>alert('$frase');history.back()</script>";
        }
    }
?>
