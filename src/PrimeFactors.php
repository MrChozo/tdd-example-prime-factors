<?php
/** @noinspection OpAssignShortSyntaxInspection */

namespace App;

class PrimeFactors
{
    public function generate($int)
    {
        $factors = [];

        for ($divisor = 2; $int > 1; $divisor++) {
            for (; $int % $divisor === 0; $int /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}