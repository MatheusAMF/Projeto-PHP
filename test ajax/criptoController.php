<?php
class CriptoController
{
    public function __construct(){
        $this->cifraCrip();
    }
    public function cifraCrip(){
        $texto = $_POST['texto'];
        $salt = $_POST['salt'];
        $alfabeto = 256;
        $n = 4;
        $fora = 32;
        $cesar = '';
        for ($i = 0; $i < strlen($texto); $i++){
            $cod = ord($texto[$i]);
            $novo = $cod + $n;
            $novo = $novo % $alfabeto;
            if($novo >= 0 && $novo < $fora){
                $novo += $fora;
            }
            $cesar .= chr($novo);
        }
        $metodo = 'aes-256-cbc';
        $metodo2 = 'idea-cbc';
        $key = substr(hash('sha256', $salt, true), 0, 32);
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $aes = base64_encode(openssl_encrypt($texto, $metodo, $key, OPENSSL_RAW_DATA, $iv));
        $idea = base64_encode(openssl_encrypt($texto, $metodo2, $key, OPENSSL_RAW_DATA, $iv));
    }
    public function cifraDescrip()
    {
        $texto = $_POST['texto'];
        $salt = $_POST['salt'];
        $alfabeto = 256;
        $n = 4;
        $fora = 32;
        $cesar = '';
        for ($i = 0; $i < strlen($texto); $i++){
            $cod = ord($texto[$i]);
            $novo = $cod - $n;
            if($novo >= 0 && $novo < $fora){
                $novo -= $fora;
            }
            if($novo < 0){
                $novo = $alfabeto + $novo;
            }
            $cesar .= chr($novo);
        }
        $metodo = 'aes-256-cbc';
        $metodo2 = 'idea-cbc';
        $key = substr(hash('sha256', $salt, true), 0, 32);
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $aes = openssl_decrypt(base64_decode($texto), $metodo, $key, OPENSSL_RAW_DATA, $iv);
        $idea = openssl_decrypt(base64_decode($texto), $metodo2, $key, OPENSSL_RAW_DATA, $iv);
    }
}
