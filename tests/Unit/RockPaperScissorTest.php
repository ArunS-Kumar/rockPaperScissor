<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\RockPaperScissor;

class RockPaperScissorTest extends TestCase
{
    public function testPlay()
    {
        $game = new RockPaperScissor();
        $result = $game->play(100);

        $this->assertTrue(is_string($result) || is_array($result));

        $expected = 100;
        $actual = $result['player1Win'] + $result['player2Win'] + $result['draws'];

        $this->assertEquals($expected, $actual, 'Values should be equal.');
        if (is_array($result)) {
            $this->assertArrayHasKey('player1Win', $result);
            $this->assertArrayHasKey('player2Win', $result);
            $this->assertArrayHasKey('draws', $result);
        }
    }
}
