<?php 

namespace App\Classes\Rule;

use App\Interfaces\RuleInterface;

class RockScissorRule extends Rule implements RuleInterface
{
    const DOMINATED_ELEMENT = 'rock';
}
