<?php
class Conexion extends PDO{  //Conexion segura
    private $hostBd='localhost:3306';
    private $nombreBd='mielchiapaneca';
    private $usuarioBd='root';
    private $passwordBd='';
    public function __construct()
    {
        try{  //validar 
            parent::__construct('mysql:host='.$this->hostBd.';dbname='.$this->
            nombreBd.';charset=utf8',$this->usuarioBd,$this->passwordBd, array(PDO::
            ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(Exception $e) {
            echo 'Error: '. $e->getMessage();
            exit;
        }
    }
}
?>