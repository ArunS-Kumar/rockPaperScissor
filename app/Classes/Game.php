<?php 

namespace App\Classes;

use App\Interfaces\RuleInterface;

class Game
{
    protected $player1Win = 0; 
    protected $player2Win = 0;
    protected $drawCount = 0;
    
    public function playRound(RuleInterface $rule, string $player1Choice): void
    {
        // These rules always check first player wins or not 
        // If the first player does not win, automatically second player wins.
        if($rule->validate($player1Choice)) {
            $this->player1Win++;
            return;
        }

        $this->player2Win++;
        return;
    }

    public function getResult(): array
    {
        return [
            'player1Win' => $this->player1Win,
            'player2Win' => $this->player2Win,
            'draws' => $this->drawCount,
        ];
    }
}