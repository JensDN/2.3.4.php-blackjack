<?php


namespace Blackjack;


class Blackjack
{
    public function __wakeup()
    {
        $this-> $score = [0] ;
    }
    public function hit(){
        return $this -> $score += rand(1,11);
    }
    public function __sleep()
    {
        return [$this -> $score];
    }

}