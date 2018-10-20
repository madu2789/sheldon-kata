<?php

namespace Kata\SheldonKata\ValueObjects;

class Lizard extends Move
{
    public static function identity(): string
    {
        return 'lizard';
    }

    public function winsToArray(): array
    {
        return [Paper::identity(), Spock::identity()];
    }
}
