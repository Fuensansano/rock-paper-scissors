<?php declare(strict_types=1);

namespace Kata;

use KataTests\Players;

class RockPaperScissorsGame
{
    public function play(string $player1move, string $player2move): Players
    {
        if ($player1move === 'rock' || $player1move === 'paper') {
            return Players::PLAYER_1;
        }
        return Players::PLAYER_2;
    }
}
