<?php

namespace Kata\SheldonKata\ValueObjects;

class Stone extends Move
{
    public static function identity(): string
    {
        return 'stone';
    }

    public function winsToArray(): array
    {
        return [Scissor::identity(), Lizard::identity()];
    }
}
