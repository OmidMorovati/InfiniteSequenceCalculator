<?php

use PHPUnit\Framework\TestCase;
use Src\Action;

class DigitSequenceTest extends TestCase
{
    public function sequenceProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [8, 12],
            [9, 7],
            [10, 10],
            [11, 8],
            [12, 9]
        ];
    }

    /**
     * @dataProvider sequenceProvider
     * @covers \Src\Action::digitsSequence
     */
    public function testDigitsSequence($input, $expected): void
    {
        self::assertEquals($expected, Action::digitsSequence($input));
    }
}

