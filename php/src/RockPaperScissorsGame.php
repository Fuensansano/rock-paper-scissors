<?php declare(strict_types=1);

namespace Kata;

use Kata\Movement;
use Kata\Player;


class RockPaperScissorsGame
{
    public function play(Movement $player1move, Movement $player2move): Player
    {
        if ($player1move ===  $player2move) {
            return Player::DRAW;
        }

        if ($this->hasPlayer1Win($player1move, $player2move)) {
            return Player::PLAYER_1;
        }

        return Player::PLAYER_2;
    }

    private function hasPlayer1Win(Movement $player1move, Movement $player2move): bool
    {
        $winnerMovements = [
            Movement::ROCK->value => Movement::SCISSORS,
            Movement::SCISSORS->value => Movement::PAPER,
            Movement::PAPER->value => Movement::ROCK,
        ];

        return $winnerMovements[$player1move->value] === $player2move;
    }
}
