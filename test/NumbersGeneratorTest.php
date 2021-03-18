<?php

declare(strict_types=1);

namespace Test;

use App\NumbersGenerator;
use PHPUnit\Framework\TestCase;

class NumbersGeneratorTest extends TestCase
{
    public function testZero()
    {
        $generator = new NumbersGenerator();
        $result = $generator->generateNumbers(0,0);
        $this->assertEquals([0], $result);
    }

    /**
     * @test
     */
    public function generateNumbersBetween1And3()
    {
        $generator = new NumbersGenerator();
        $result = $generator->generateNumbers(1, 3);
        $this->assertEquals([1,2,3], $result);
    }

    /**
     * @test
     */
    public function failToGenerateNumbersBetween1And1()
    {
        $generator = new NumbersGenerator();
        $result = $generator->generateNumbers(1, 1);
        $this->assertEquals([1], $result);
    }

    /**
     * @test
     */
    public function failToGenerateNumbersBetween2And1()
    {
        $generator = new NumbersGenerator();
        $result = $generator->generateNumbers(2, 1);
        $this->assertEquals([], $result);
    }
}