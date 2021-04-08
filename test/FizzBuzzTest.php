<?php

declare(strict_types=1);

namespace Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returnNumberTwo()
    {
        $message = new FizzBuzz();
        $this->assertEquals(2, $message(2));
    }

    /**
     * @test
     */
    public function returnFizzMessage()
    {
        $message = new FizzBuzz();
        $this->assertEquals('Fizz', $message(3));
    }

    /**
     * @test
     */
    public function returnBuzzMessage()
    {
        $message = new FizzBuzz();
        $this->assertEquals('Buzz', $message(5));
    }

    /**
     * @test
     */
    public function returnFizzBuzzMessage()
    {
        $message = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $message(15));
    }
}