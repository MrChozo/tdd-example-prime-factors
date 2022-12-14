<?php
/** @noinspection OpAssignShortSyntaxInspection */

namespace App;

class PrimeFactors
{
    public function generate($int)
    {
        $factors = [];

        // 1. Is the number divisible by 2?
        // 2. If true, then divide by 2. If false, increase prime number candidate
        //    and try again.
        // 3. Repeat.

        while ($int % 2 === 0) {
            $factors[] = 2;

            $int = $int / 2;
        }

        return $factors;
    }
}