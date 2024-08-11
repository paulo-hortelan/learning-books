<?php

namespace Tests\Feature\GrokkingAlgorithms;

use App\GrokkingAlgorithms\Introduction;
use App\Helpers\ArrayHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IntroductionTest extends TestCase
{
    public function testBinarySearchWithRandomValues(): void
    {
        $randomArray = ArrayHelper::generateRandomArrayWithUniqueValues(100, 0, 100000);
        $randomValue = $randomArray[array_rand($randomArray)];

        $elementPosition = Introduction::binarySearch($randomArray, $randomValue);

        $this->assertEquals($randomValue, $randomArray[$elementPosition]);
    }

    public function testBinarySearchWithCustomValues(): void
    {
        $stringArray = ['apple', 'banana', 'orange', 'pineapple'];
        $intArray = [1, 2, 3, 4, 5];

        $stringElement = 'orange';
        $intElement = 4;

        $stringElementPosition = Introduction::binarySearch($stringArray, $stringElement);
        $intElementPosition = Introduction::binarySearch($intArray, $intElement);

        $this->assertEquals($stringElement, $stringArray[$stringElementPosition]);
        $this->assertEquals($intElement, $intArray[$intElementPosition]);
    }

    public function testBinarySearchRecursiveWithRandomValues(): void
    {
        $randomArray = ArrayHelper::generateRandomArrayWithUniqueValues(100, 0, 100000);
        $randomValue = $randomArray[array_rand($randomArray)];

        $elementPosition = Introduction::binarySearchRecursive($randomArray, 0, count($randomArray) - 1, $randomValue);

        $this->assertEquals($randomValue, $randomArray[$elementPosition]);
    }
}
