<?php
/** @noinspection OpAssignShortSyntaxInspection */

namespace App;

class PrimeFactors
{
    public function generate($int)
    {
        $factors = [];
        $divisor = 2;

        // 1. Is the number divisible by 2?
        // 2. If true, then divide by 2. If false, increase prime number candidate
        //    and try again.
        // 3. Repeat.

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