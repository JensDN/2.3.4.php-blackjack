<?php


namespace Blackjack;


class Blackjack
{
    public int $score = 0;
    public array $cards = [];
    public bool $enable = true;
    function __construct()
    {
        array_push($this->cards, rand(1, 11), rand(1, 11));
        $this->score = array_sum($this->cards);
        if($this->score > 21){
        $this->surrender();
        }
    }
    public function hit(){
        array_push($this->cards, rand(1, 11));
        $this->score = array_sum($this->cards);
        if($this->score > 21){
            $this->surrender(); }
    }
    public function stand(){
        $this->enable = false;
    }
    public function surrender(){
        echo 'You lost. Try again';
        $this->enable = false;
        unset($_SESSION['totalValue']);
        unset($_SESSION['pls    ayer']);
    }

}