<?php declare(strict_types=1);

namespace Kata;

class RockPaperScissorsGame
{
    public function play(string $player1move, string $player2move): string
    {
        if ($player1move === 'rock') {
            return 'player1';
        }
        return 'player2';
    }
}
