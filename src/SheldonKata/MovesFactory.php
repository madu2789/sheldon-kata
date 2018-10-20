<?php

namespace Kata\SheldonKata;

use Kata\SheldonKata\ValueObjects\Lizard;
use Kata\SheldonKata\ValueObjects\Move;
use Kata\SheldonKata\ValueObjects\Paper;
use Kata\SheldonKata\ValueObjects\Scissor;
use Kata\SheldonKata\ValueObjects\Spock;
use Kata\SheldonKata\ValueObjects\Stone;

final class MovesFactory
{
    /**
     * @param string $move
     *
     * @return Move
     * @throws \Exception
     */
    public function __invoke(string $move) : Move
    {
        if ('lizard' === $move)
        {
            return new Lizard();
        }

        if ('paper' === $move)
        {
            return new Paper();
        }

        if ('scissor' === $move)
        {
            return new Scissor();
        }

        if ('spock' === $move)
        {
            return new Spock();
        }

        if ('stone' === $move)
        {
            return new Stone();
        }

        throw new \Exception('Invalid Option');
    }
}
