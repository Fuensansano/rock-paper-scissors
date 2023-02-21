<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

enum Players: string {
    case PLAYER_1 = 'player1';
    case PLAYER_2 = 'player2';
}

enum Movements: string {
    case ROCK = 'rock';
    case PAPER = 'paper';
    case SCISSORS = 'scissors';
}

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
        $result = $this->game->play(Movements::ROCK, Movements::SCISSORS);

        self::assertEquals( Players::PLAYER_1, $result);
    }

    /** @test */
    public function given_I_have_chosen_scissors_when_the_opponent_chooses_rock_then_the_opponent_should_win(): void
    {
        $result = $this->game->play(Movements::SCISSORS, Movements::ROCK);

        self::assertEquals(Players::PLAYER_2, $result);
    }

    /** @test */
    public function given_I_have_chosen_paper_when_the_opponent_chooses_rock_then_I_should_win(): void
    {
        $result = $this->game->play(Movements::PAPER, Movements::ROCK);

        self::assertEquals(Players::PLAYER_1, $result);
    }
}
