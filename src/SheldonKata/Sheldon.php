<?php

namespace Kata\SheldonKata;

final class Sheldon
{
    /**
     * @param string $first_player_move
     * @param string $second_player_move
     *
     * @return string
     * @throws \Exception
     */
    public function __invoke(string $first_player_move, string $second_player_move): string
    {
        $factory = new MovesFactory();

        $first_move  = $factory->__invoke($first_player_move);
        $second_move = $factory->__invoke($second_player_move);

        if ($first_move->equals($second_move))
        {
            return 'Draw';
        }

        if ($first_move->winsTo($second_move))
        {
            return 'Player 1 wins';
        }

        return 'Player 2 wins';
    }
}
