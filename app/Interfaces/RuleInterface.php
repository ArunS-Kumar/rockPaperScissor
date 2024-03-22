<?php

namespace App\Interfaces;

interface RuleInterface {

    public function validate(string $player1Choice): bool;
}