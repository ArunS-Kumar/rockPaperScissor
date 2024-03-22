<?php 

namespace App\Classes\Rule;

use App\Interfaces\RuleInterface;

class PaperScissorRule extends Rule implements RuleInterface
{
    const DOMINATED_ELEMENT = 'scissor';
}
