<?php declare(strict_types=1);

namespace KataTests;

use Kata\Movement;
use Kata\Player;
use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

class RockPapperScissorsTest extends TestCase
{
    private $game;

    public function setUp(): void
    {
        $this->game = new RockPaperScissorsGame();
    }

    function providersGame(): \Generator
    {
        yield 'Given I have chosen rock When the opponent chooses scissors Then I should win' => [Movement::ROCK, Movement::SCISSORS, Player::PLAYER_1];
        yield 'Given I have chosen scissors When the opponent chooses rock Then the opponent should win' => [Movement::SCISSORS, Movement::ROCK, Player::PLAYER_2];
        yield 'Given I have chosen paper When the opponent chooses rock Then I should win' => [Movement::PAPER, Movement::ROCK, Player::PLAYER_1];
        yield 'Given I have chosen rock When the opponent chooses paper Then the opponent should win' => [Movement::ROCK, Movement::PAPER, Player::PLAYER_2];
        yield 'Given I have chosen scissors When the opponent chooses paper Then I should win' => [Movement::SCISSORS, Movement::PAPER, Player::PLAYER_1];
    }

    /**
     * @dataProvider providersGame
     * @test
     */
    public function given_the_player1_movement_and_the_player2_movement_one_of_them_should_win(Movement $movementPlayer1, Movement $movementPlayer2, Player $winner): void
    {
        $result = $this->game->play($movementPlayer1, $movementPlayer2);

        self::assertEquals($winner, $result);
    }

}
