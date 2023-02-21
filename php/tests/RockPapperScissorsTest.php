<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

class RockPapperScissorsTest extends TestCase
{
    /** @test */
    public function given_I_have_chosen_rock_when_the_opponent_chooses_scissors_then_I_should_win(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play('rock', 'scissors');

        self::assertEquals('player1', $result);
    }

    /** @test */
    public function given_I_have_chosen_scissors_when_the_opponent_chooses_rock_then_the_opponent_should_win(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play('scissors', 'rock');

        self::assertEquals('player2', $result);
    }
}
