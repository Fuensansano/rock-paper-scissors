<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

class RockPapperScissorsTest extends TestCase
{
    private $game;

    public function setUp(): void
    {
        $this->game = new RockPaperScissorsGame();
    }

    /** @test */
    public function given_I_have_chosen_rock_when_the_opponent_chooses_scissors_then_I_should_win(): void
    {
        $result = $this->game->play(\Kata\Movement::ROCK, \Kata\Movement::SCISSORS);

        self::assertEquals( \Kata\Player::PLAYER_1, $result);
    }

    /** @test */
    public function given_I_have_chosen_scissors_when_the_opponent_chooses_rock_then_the_opponent_should_win(): void
    {
        $result = $this->game->play(\Kata\Movement::SCISSORS, \Kata\Movement::ROCK);

        self::assertEquals(\Kata\Player::PLAYER_2, $result);
    }

    /** @test */
    public function given_I_have_chosen_paper_when_the_opponent_chooses_rock_then_I_should_win(): void
    {
        $result = $this->game->play(\Kata\Movement::PAPER, \Kata\Movement::ROCK);

        self::assertEquals(\Kata\Player::PLAYER_1, $result);
    }
}
