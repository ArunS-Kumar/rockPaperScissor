<?php 

namespace App\Factory;

class RuleFactory 
{
    private static $ruleMap = [
        'paper_rock' => 'PaperRockRule',
        'paper_scissor' => 'PaperScissorRule',
        'rock_scissor' => 'RockScissorRule'
    ];

    public static function getRule(...$choices)
    {
        sort($choices);
        $ruleKey = implode("_", $choices);
        
        if (isset(self::$ruleMap[$ruleKey])) 
        {
            $className = 'App\Classes\Rule\\'. self::$ruleMap[$ruleKey];
            return new $className();
        } else {
            throw new \Exception("Invalid choices");
        }
    }
}
