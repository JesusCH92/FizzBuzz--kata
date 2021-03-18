<?php

declare(strict_types=1);

namespace App;

final class CyberClick
{
    public function __invoke(int $number)
    {
        if($this->isDivisibleByThree($number) && $this->isDivisibleByFive($number)){
            return 'cyberclick';
        }

        if($this->isDivisibleByThree($number)){
            return 'cyber';
        }

        if($this->isDivisibleByFive($number)){
            return 'click';
        }

        return $number;
    }

    private function isDivisibleByThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return $number % 5 == 0;
    }
}
