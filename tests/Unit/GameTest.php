<?php

namespace App\Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Game;
use App\Interfaces\RuleInterface;

class GameTest extends TestCase
{
    public function testPlayRoundPlayer1Wins()
    {
        $player1Choice = 'rock';

        $ruleMock = $this->createMock(RuleInterface::class);
        $ruleMock->expects($this->once())
            ->method('validate')
            ->with($player1Choice)
            ->willReturn(true);

        $game = new Game();
        $game->playRound($ruleMock, $player1Choice);

        $result = $game->getResult();

        $this->assertEquals(1, $result['player1Win']);
        $this->assertEquals(0, $result['player2Win']);
        $this->assertEquals(0, $result['draws']);
    }

    public function testPlayRoundPlayer2Wins()
    {
        $player1Choice = 'rock';

        $ruleMock = $this->createMock(RuleInterface::class);
        $ruleMock->expects($this->once())
            ->method('validate')
            ->with($player1Choice)
            ->willReturn(false);

        $game = new Game();
        $game->playRound($ruleMock, $player1Choice);

        $result = $game->getResult();

        $this->assertEquals(0, $result['player1Win']);
        $this->assertEquals(1, $result['player2Win']);
        $this->assertEquals(0, $result['draws']);
    }

    public function testGetResult()
    {
        $game = new Game();

        $result = $game->getResult();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('player1Win', $result);
        $this->assertArrayHasKey('player2Win', $result);
        $this->assertArrayHasKey('draws', $result);
    }
}
