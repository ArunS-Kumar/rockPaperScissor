<?php 

namespace App\Classes\Rule;

use App\Interfaces\RuleInterface;
use App\Classes\Rule\Rule;

class PaperRockRule extends Rule implements RuleInterface
{
    const DOMINATED_ELEMENT = 'paper';
}
