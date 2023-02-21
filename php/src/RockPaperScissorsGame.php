<?php declare(strict_types=1);

namespace Kata;

use KataTests\Movements;
use KataTests\Players;

class RockPaperScissorsGame
{
    public function play(Movements $player1move, Movements $player2move): Players
    {
        var_dump($player1move === Movements::SCISSORS);
        if ($player1move === Movements::ROCK || $player1move === Movements::PAPER) {
            return Players::PLAYER_1;
        }

        return Players::PLAYER_2;
    }
}
