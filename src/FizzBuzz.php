<?php

declare(strict_types=1);

namespace App;

final class FizzBuzz
{
    public function __invoke(int $number)
    {
        if ($this->isDivisibleByThree($number) && $this->isDivisibleByFive($number)) {
            return 'FizzBuzz';
        }

        if ($this->isDivisibleByThree($number)) {
            return 'Fizz';
        }

        if ($this->isDivisibleByFive($number)) {
            return 'Buzz';
        }

        return $number;
    }

    private function isDivisibleByThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return $number % 5 === 0;
    }
}
