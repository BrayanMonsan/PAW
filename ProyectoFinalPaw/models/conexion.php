<?php
    class Conectar extends PDO{
        private $hostBD='localhost';
        private $nombreBD='paw';
        private $usuarioBD='root';
        private $passwordBD='root';
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';
                dbname='.$this->nombreBD.';charset=utf8',$this->
                usuarioBD,$this->passwordBD,array(PDO::ATTR_ERRMODE
                =>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                echo '<script>console.log('.$e.');
                 </script>';
                exit;
                
            }
        }
    }
?>