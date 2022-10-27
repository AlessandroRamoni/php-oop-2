<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $marca;
    public $razza;
    public $id;

    public function __construct($_nome, $_prezzo, $_marca, $_razza, $_id){
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->marca=$_marca;
        $this->razza=$_razza;
        $this->id=$_id;
    }
}

?>