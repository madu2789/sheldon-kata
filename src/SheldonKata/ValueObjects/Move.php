<?php

namespace Kata\SheldonKata\ValueObjects;

class Move
{
    public static function identity(): string
    {
    }

    public function equals(Move $move): bool
    {
        return $this->identity() === $move->identity();
    }

    public function winsTo(Move $move): bool
    {
        if (in_array($move->identity(), $this->winsToArray()))
        {
            return true;
        }

        return false;
    }

    protected function winsToArray(): array
    {
        return [];
    }
}
