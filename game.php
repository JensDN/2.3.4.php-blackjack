<?php
require './blackjack/Blackjack.php';
use blackjack\Blackjack;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $player = new Blackjack;
    $dealer = new Blackjack;
    $_SESSION['player'] = $player;
    $_SESSION['dealer'] = $dealer;
} else {
    $player = $_SESSION['player'];
    $dealer = $_SESSION['dealer'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //hit();
    if ($_POST['submit'] === 'hit()'){
        $player->hit();
    }
    //stand();
    else if ($_POST['submit'] === 'stand()') {
        $player->stand();
    }
    //surrender();
    else if ($_POST['submit'] === 'surrender()'){
        $player->surrender();
    }
}


function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();


?>
