<?php

namespace App;

class PrimeFactors
{
    public function generate($int)
    {
        if ($int > 1) {
            return [$int];
        }

        return [];
    }
}