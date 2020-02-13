<?php
use blackjack\Blackjack;
require './blackjack/Blackjack.php';
$player = new Blackjack;
$dealer = new Blackjack;
$player::hit();
echo $player::$score;
$player::hit();
echo $player::$score;
 function CheckHit ($submitPost, $side){
     if ($submitPost){
         $side::hit();
     }
 }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style/base.css">
    <title>Le game</title>
</head>
<body>
<div class="grid-container">
    <div class="PLAYER">
        <div class="PLAYER-NAME">
            <h1>PLAYER NAME</h1>
        </div>
        <div class="HIT">
            <h1>HIT</h1>
            <form Name ="hit" Method ="POST">
                <input type="Submit" name="playerHit" value="true">
            </form>

        </div>
        <div class="STAND">
            <h1>STAND</h1>

        </div>
        <div class="SURRENDER">
            <h1>SURRENDER</h1>

        </div>
        <div class="NUMBER-PLAYER">
            <h1>NUMBER-PLAYER</h1>
        </div>
        <div class="SCORE-PLAYER">
            <h1>SCORE-PLAYER</h1>
        </div>
    </div>
    <div class="DEALER">
        <div class="SCORE-DEALER">
            <h1>SCORE-DEALER</h1>
        </div>
        <div class="NUMBER-DEALER">
            <h1>NUMBER-DEALER</h1>
        </div>
        <div class="DEALER-NAME">
            <h1>DEALER-NAME</h1>
        </div>
    </div>
</div>
</body>
</html>
