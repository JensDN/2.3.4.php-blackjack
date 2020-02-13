<?php


namespace Blackjack;


class Blackjack
{

    /**
     * @var int
     */

    public static int $score = 0;
    public static function hit (){
        self::$score = self::$score + rand(1, 11);
        return self::$score;
    }
    public static function stand (){
        echo 'stand';
    }
    public static function surrender(){
        echo 'surrender';
    }

}