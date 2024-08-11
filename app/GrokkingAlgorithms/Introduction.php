<?php

namespace App\GrokkingAlgorithms;

use App\Contracts\GrokkingAlgorithms\Introduction as IntroductionContract;

abstract class Introduction implements IntroductionContract
{
    public static function binarySearch(array $list, mixed $item): ?int
    {
        if (count($list) === 0)
            return null;

        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            $guess = $list[$mid];

            if ($guess === $item)
                return $mid;

            if ($guess > $item)
                $high = $mid - 1;
            else
                $low = $mid + 1;
        }

        return null;
    }

    public static function binarySearchRecursive(array $list, mixed $start, mixed $end, mixed $item): ?int
    {
        if ($end < $start)
            return null;

        // $low = 0;
        // $high = count($list) - 1;

        // while ($low <= $high) {
        $mid = floor(($start + $end) / 2);
        $guess = $list[$mid];

        if ($guess === $item)
            return $mid;

        if ($guess > $item)
            return self::binarySearchRecursive($list, $start, $mid - 1, $item);
        // $high = $mid - 1;
        else
            return self::binarySearchRecursive($list, $mid + 1, $end, $item);
        // $low = $mid + 1;
        // }

        // return null;
    }
}
