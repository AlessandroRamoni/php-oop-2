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
        public $id;

        public function __construct($_nome, $_prezzo, $_marca, $_razza, $_id){
            $this->nome=$_nome;
            $this->prezzo=$_prezzo;
            $this->marca=$_marca;
            $this->razza=$_razza;
            $this->id=$_id;
        }
    }

    $crocchette = new Prodotto("Crocklife", 19.99, "Acana", "cane", 121);
    
    $tiragraffi = new Prodotto("Tiragraffi", 9.99, "Amazon", "gatto", 503);

    $cuccia = new Prodotto("CucciaDeluxe", 29.99, "RoditoriShop", "coniglio", 718);


    var_dump($crocchette);
    var_dump($tiragraffi);
    var_dump($cuccia);

    class Food extends Prodotto {
        public $scadenza;
        public $peso;
    }

    var_dump($Food);

    class Gioco extends Prodotto {
        public $materiale;
        public $provenienza;
    }

    class Cuccia extends Prodotto {
        public $dimensione;
        public $lavabile;
    }

  

    class Cliente {
        public $nome;
        public $cognome;
        public $data_di_nascita;
        protected $email;
        protected $password;
        protected $account_create = false;
        protected $creditcard;
        protected $discount = 0;

        public function __construct($_nome, $_cognome, $_data_di_nascita, $_email, $_password) {
            $this->nome=$_nome;
            $this->cognome=$_cognome;
            $this->data_di_nascita=$_data_di_nascita;
            $this->email=$_email;
            $this->password=$_password;
        }

        // function setAccount()
        // {
        //     if (isset($_POST['email']) && $_POST['email'] != ''  && isset($_POST['psw']) && $_POST['psw'] != '') {
        //         $this->email = $_POST['email'];
        //         $this->password = $_POST['psw'];
        //         $this->account_create = true;
        //     } elseif ($_POST['email'] = '' && $_POST['psw'] = '') {
        //         $this->account_create = false;
        //         $this->mail = null;
        //         $this->password = null;
        //     }
        // }
    }

    $Tommaso = new Cliente("Tommaso", "Vattela", 2003-04-01, "tommaso@libero.it", "asdf");

    $Gloria = new Cliente("Gloria", "Antani", 1998-07-15, "gloria@libero.it", "poiu");

    $Carlotta = new Cliente("Carlotta", "Ciulla", 2012-12-12, "carlotta@libero.it", "zxcv");

    var_dump($Tommaso);
    var_dump($Gloria);
    var_dump($Carlotta);
    ?>

</body>
</html>