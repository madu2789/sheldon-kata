<?php

namespace Kata\SheldonKata\ValueObjects;

class Scissor extends Move
{
    public static function identity(): string
    {
        return 'scissor';
    }

    public function winsToArray(): array
    {
        return [Paper::identity(), Lizard::identity()];
    }
}
