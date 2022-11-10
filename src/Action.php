<?php

namespace Src;

class Action
{
    private static function sumOfDigits(int $n): int
    {
        $sum = 0;
        while ($n != 0) {
            $sum = $sum + $n % 10;
            $n   = $n / 10;
        }
        return $sum;
    }

    public static function digitsSequence(int $n)
    {
        $memo[0] = 0;
        $memo[1] = 1;

        for ($i = 2; $i <= $n; $i++) {
            $memo[$i] = self::sumOfDigits($memo[$i - 1]) + self::sumOfDigits($memo[$i - 2]);
        }

        return $memo[$n];
    }
}

