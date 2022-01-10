<?php

/*
Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi
*/


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
}





//INSTANZE da classe padre

// prodotto 1
$shoes = new Products('shoes', 78, true);
var_dump($shoes);

// prodotto 2
$jacket = new Products('jacket', 93, false);
var_dump($jacket);

echo '<br>';

//INSTANZE da classe estesa

$sweatshirt = new secondHandProducts('sweatshirt', 45, true, 'ottimo');
var_dump($sweatshirt);