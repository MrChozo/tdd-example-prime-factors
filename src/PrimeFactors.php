<?php
/** @noinspection OpAssignShortSyntaxInspection */

namespace App;

class PrimeFactors
{
    public function generate($int)
    {
        $factors = [];
        $divisor = 2;

        while ($int > 1) {
            while ($int % $divisor === 0) {
                $factors[] = $divisor;

                $int = $int / $divisor;
            }

            $divisor++;
        }

        return $factors;
    }
}