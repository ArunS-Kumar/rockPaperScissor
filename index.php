<?php

ini_set('display_errors', 1);

if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

if (isset($argv)) {
    $parameters = array_slice($argv, 1);

    $count = 100;
    if (isset($parameters[0])) {
        $count = (int) $parameters[0];
    }

    $responce = (new App\RockPaperScissor())->play($count);
    if (isset($responce['error'])) {
        echo "Error: ". $responce['message'];
    } else {
        echo "Player1 Wins:" . $responce['player1Win']. "\n";
        echo "Player2 Wins:" . $responce['player2Win']. "\n";
        echo "Draws:" . $responce['draws']. "\n";
    }
}
