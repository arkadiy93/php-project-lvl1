<?php

namespace App\src\games\prime;

use function App\src\index\playGame;

define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 20);
const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function startBrainPrime()
{
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $isPrime = gmp_prob_prime($question);
        $correctAnswer = $isPrime == 0 ? 'no' : 'yes';
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
