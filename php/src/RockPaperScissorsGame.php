<?php declare(strict_types=1);

namespace Kata;

use Kata\Movement;
use Kata\Player;

class RockPaperScissorsGame
{
    public function play(Movement $player1move, Movement $player2move): Player
    {
        if ($player1move === Movement::ROCK || $player1move === Movement::PAPER) {
            return Player::PLAYER_1;
        }

        return Player::PLAYER_2;
    }
}
