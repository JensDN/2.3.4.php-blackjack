<?php
require './blackjack/Blackjack.php';
use blackjack\Blackjack;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $player = new Blackjack;
    $dealer = new Blackjack;
    $_SESSION['player'] = serialize($player);
    $_SESSION['dealer'] = serialize($dealer);
} else {
    $player = unserialize($_SESSION['player']);
    $dealer = unserialize($_SESSION['dealer']);
}
$player::hit();
echo $player::$score;
$_SESSION['player'] = serialize($player);
/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['playerHit']) {
        $player::hit();
        $_SESSION['player'] = $player;
    }
}*/

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
                <input type="submit" name="playerHit" value='hit'>
            </form>

        </div>
        <div class="STAND">
            <h1>STAND</h1>
            <form Name ="hit" Method ="POST">
                <input type="submit" name="playerStand" value='stand'>
            </form>
        </div>
        <div class="SURRENDER">
            <h1>SURRENDER</h1>
            <form Name ="hit" Method ="POST">
                <input type="submit" name="playerSurrender" value='surrender'>
            </form>
        </div>
        <div class="NUMBER-PLAYER">
            <h1>NUMBER-PLAYER</h1>
            <?php echo $player::$score; ?>
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
