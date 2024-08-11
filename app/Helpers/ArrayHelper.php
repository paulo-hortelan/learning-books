<?php

namespace App\Helpers;

class ArrayHelper
{
    static public function generateRandomArrayWithUniqueValues(int $arraySize, int $minValue, int $maxValue): array
    {
        $picked = [];
        $uniqueRandomNumbers = array_map(function () use (&$picked, $arraySize, $minValue, $maxValue) {
            do {
                $rand = rand($minValue, $maxValue);
            } while (in_array($rand, $picked));

            $picked[] = $rand;

            return $rand;
        }, array_fill(0, $arraySize, null));

        sort($uniqueRandomNumbers);

        return $uniqueRandomNumbers;
    }
}
