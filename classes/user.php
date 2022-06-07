//creazione di un a classe con delle proprietà
<?php
class User {
protected $nome;
protected $cognome;
protected $numero_carta;

//creare una funzione che compie un'azione con all'interno dei valori
    function __construct($_nome, $_cognome, $_numero_carta) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this ->numero_carta = $_numero_carta;
    }
public function getNome(){
    return $this-> nome;
}
public function getCognome(){
    return $this-> cognome;
}
public function getNumero_carta(){
    return $this-> numero_carta;
}

   
}
?>