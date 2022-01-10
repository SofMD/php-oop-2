<?php

/*
Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi
*/

//------PRODOTTI------
class Products {
    //proprietà
    public $nomeProdotto;
    public $prezzo;
    public $disponibilità;

    //metodi
    public function __construct($nomeProdotto, $prezzo, $disponibilità) {
        $this -> nomeProdotto = $nomeProdotto;
        $this -> prezzo = $prezzo;
        $this -> disponibilità = $disponibilità;
    }

    public function contDisp(){
        if ($this->disponibilità === true){
            echo '<h4 style="color:green;"> articolo disponibile </h4> ';
        }else{
            echo '<h4 style="color:red;"> articolo NON disponibile </h4> ';
        }
    }
}

//ereditarietà
class secondHandProducts extends Products 
{
    //proprietà
    public $condizioni;

    // costruttore
    public function __construct($nomeProdotto, $prezzo, $disponibilità, $condizioni){

        parent::__construct($nomeProdotto, $prezzo, $disponibilità);

        $this -> condizioni = $condizioni;
    }

    public function getcondizioni(){
        if ($this->condizioni === 'nuovo'){
            echo '<div style=" display: inline-block;">CONDIZIONI:</div> <div style="background-color:green; width:20px; height: 20px;  display: inline-block;">  </div> ';
        }elseif($this->condizioni === 'buone'){
            echo '<div style=" display: inline-block;">CONDIZIONI:</div> <div style="background-color:orange; width:20px; height: 20px;  display: inline-block;">  </div> ';
        }
    }
}



//INSTANZE da classe padre

// prodotto 1
$shoes = new Products('shoes', 78, true);
var_dump($shoes);
$shoes -> contDisp();

echo '<br> <hr>';

// prodotto 2
$jacket = new Products('jacket', 93, false);
var_dump($jacket);
$jacket -> contDisp();

echo '<br> <hr>';

//INSTANZE da classe estesa

$sweatshirt = new secondHandProducts('sweatshirt', 45, true, 'nuovo');
var_dump($sweatshirt);
$sweatshirt -> contDisp();
$sweatshirt ->getcondizioni();

echo '<br><hr>';

$trousers = new secondHandProducts('trousers', 39, false, 'buone');
var_dump($trousers);
$trousers -> contDisp();
$trousers ->getcondizioni();




// -----UTENTI------

class User {
    public $name;
    public $lastName;
    public $age;

    //metodi
    public function __construct($name, $lastName, $age) {
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> age = $age;
    }
}

//ereditarietà
class premiumUsers extends User 
{
    //proprietà
    public $level;
    

    // costruttore
    public function __construct($name, $lastName, $age, $level){

        parent::__construct($name, $lastName, $age);

        $this -> level = $level;
    }

    public function utenteType(){
        if ($this->level === 'premium'){
            echo '<h4>Sei un utente premium </h4>';
        }
    }
}


// instanze
echo '<br><hr>';
echo '<br>';

$user1 = new User('Carlo', 'Bianchi', 26 );
var_dump($user1);

echo '<br><hr>';
$userPremium = new premiumUsers('Francesca', 'Rossi', 42, 'premium');
var_dump($userPremium);
$userPremium ->utenteType();