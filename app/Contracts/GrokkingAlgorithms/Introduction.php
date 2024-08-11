<?php

namespace App\Contracts\GrokkingAlgorithms;

interface Introduction
{
    /**
     * Get the broadcast channel route definition that is associated with the given entity.
     *
     * @return ?int
     */
    public static function binarySearch(array $list, mixed $item);
}
