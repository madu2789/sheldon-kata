<?php

namespace Kata\SheldonKata\ValueObjects;

class Paper extends Move
{
    public static function identity(): string
    {
        return 'paper';
    }

    public function winsToArray(): array
    {
        return [Stone::identity(), Spock::identity()];
    }
}
