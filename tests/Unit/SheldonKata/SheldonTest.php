<?php

namespace KataTest\Unit\SheldonKata;

use Kata\SheldonKata\Sheldon;

class SheldonTest extends \PHPUnit_Framework_TestCase
{
    /** @var Sheldon */
    private $sheldon;

    private function havingSheldonGame(): void
    {
        $this->sheldon = new Sheldon();
    }

    /**
     * @test
     * @dataProvider drawProvider
     *
     * @param $first_player_move
     * @param $second_player_move
     *
     * @throws \Exception
     */
    public function shouldDrawIfAreTheSameMove($first_player_move, $second_player_move)
    {
        $this->havingSheldonGame();

        $expectedScore = 'Draw';

        $this->assertEquals($expectedScore, $this->sheldon->__invoke($first_player_move, $second_player_move));
    }

    /**
     * @test
     * @dataProvider firstMoveWinsProvider
     *
     * @param $winner_move
     * @param $looser_move
     *
     * @throws \Exception
     */
    public function shouldWinPlayerOneIfHisMoveIsWinner($winner_move, $looser_move)
    {
        $this->havingSheldonGame();

        $expectedScore = 'Player 1 wins';

        $this->assertEquals($expectedScore, $this->sheldon->__invoke($winner_move, $looser_move));
    }

    /**
     * @test
     * @dataProvider firstMoveWinsProvider
     *
     * @param $winner_move
     * @param $looser_move
     *
     * @throws \Exception
     */
    public function shouldWinPlayerTwoIfHisMoveIsWinner($winner_move, $looser_move)
    {
        $this->havingSheldonGame();

        $expectedScore = 'Player 2 wins';

        $this->assertEquals($expectedScore, $this->sheldon->__invoke($looser_move, $winner_move));
    }

    public function drawProvider()
    {
        return [
            ['stone', 'stone'],
            ['paper', 'paper'],
            ['scissor', 'scissor'],
            ['lizard', 'lizard'],
            ['spock', 'spock'],
        ];
    }

    public function firstMoveWinsProvider()
    {
        return [
            ['stone', 'scissor'],
            ['stone', 'lizard'],
            ['paper', 'spock'],
            ['paper', 'stone'],
            ['scissor', 'lizard'],
            ['scissor', 'paper'],
            ['lizard', 'paper'],
            ['lizard', 'spock'],
            ['spock', 'stone'],
            ['spock', 'scissor'],
        ];
    }
}
