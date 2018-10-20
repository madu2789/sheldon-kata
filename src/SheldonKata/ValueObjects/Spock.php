<?php

namespace Kata\SheldonKata\ValueObjects;

class Spock extends Move
{
    public static function identity(): string
    {
        return 'spock';
    }

    public function winsToArray(): array
    {
        return [Stone::identity(), Scissor::identity()];
    }
}
