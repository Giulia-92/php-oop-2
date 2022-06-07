<?php
class Numero_carta{
    protected $nome;
    protected $numero;
    protected $data;
    

    function __construct($_nome,$_numero,$_data){
        $this->nome = $_nome;
        $this->numero = $_numero;
        $this->data = $_data;

    }
    public function getnome(){
        return $this-> nome;
    }
    public function getnumero(){
        return $this-> numero;
    }
    public function getdata(){
        return $this-> data;
    }
}
?>