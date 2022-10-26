<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP-2</title>
</head>
<body>

    <?php

    class Prodotto {
        public $nome;
        public $prezzo;
        public $marca;
        public $razza;

        public function __construct($_nome, $_prezzo, $_marca, $_razza){
            $this->nome=$_nome;
            $this->prezzo=$_prezzo;
            $this->marca=$_marca;
            $this->razza=$_razza;
        }
    }

    $crocchette = new Prodotto("Crocklife", 19.99, "Acana", "cane");
    
    $gioco = new Prodotto("Tiragraffi", 9.99, "Amazon", "gatto");

    $cuccia = new Prodotto("CucciaDeluxe", 29.99, "RoditoriShop", "coniglio");


    var_dump($crocchette);
    var_dump($gioco);
    var_dump($cuccia);

    class crocche extends Prodotto {

    }

    ?>


</body>
</html>