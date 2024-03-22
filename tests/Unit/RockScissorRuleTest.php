<?php

namespace App\Tests\Classes\Rule;

use PHPUnit\Framework\TestCase;
use App\Classes\Rule\RockScissorRule;

class RockScissorRuleTest extends TestCase
{
    public function testValidate_Player1ChoiceEqualsDominatedElement_ReturnsTrue()
    {
        $player1Choice = 'rock';

        $rule = new RockScissorRule();
        $result = $rule->validate($player1Choice);

        $this->assertTrue($result);
    }

    public function testValidate_Player1ChoiceNotEqualsDominatedElement_ReturnsFalse()
    {
        $player1Choice = 'scissor';

        $rule = new RockScissorRule();
        $result = $rule->validate($player1Choice);

        $this->assertFalse($result);
    }
}
