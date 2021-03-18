<?php

declare(strict_types=1);

namespace App;

final class NumbersGenerator
{
    public function generateNumbers(int $first, int $last): array
    {
        $numbers = [];
        for($number=$first; $number <= $last; $number++) {
            $numbers[] = $number;
        }

        return $numbers;
    }
}