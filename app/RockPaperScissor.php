<?php 

namespace App;

use App\Classes\Game;
use App\Factory\RuleFactory;

class RockPaperScissor extends Game
{
    protected $player1Choice = 'rock';

    protected $player2Choice;

    public function play(int $count): array
    {
        try {       
            for ($i=1; $i <= $count; $i++) 
            {
                $this->player2Choice = $this->getRandomChoice();   
                
                if ($this->player1Choice == $this->player2Choice) { 
                    $this->drawCount++;
                    continue;
                }
                
                $rule = (new RuleFactory())->getRule($this->player1Choice, $this->player2Choice);            
                $this->playRound($rule, $this->player1Choice);
            } 

            return $this->getResult();
        } catch (\Exception $e) {
            return [
                'type' => 'error',
                'message' => $e->getMessage()
            ];
        }
    }

    private function getRandomChoice(): string {
        $choices = [
            "rock",
            "paper", 
            "scissor"
        ];
        return $choices[rand(0, 2)];
    }
}
