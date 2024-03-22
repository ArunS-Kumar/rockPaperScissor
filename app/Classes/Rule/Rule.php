<?php 

namespace App\Classes\Rule;

abstract class Rule
{
    public function validate(string $player1Choice): bool
    {
        if ($player1Choice == static::DOMINATED_ELEMENT) {
            return true;
        }
        return false;
    }
}
