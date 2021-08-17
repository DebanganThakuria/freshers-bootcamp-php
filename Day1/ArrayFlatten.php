<?php
declare(strict_types=1);

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$multiDimArray = array(2, 3, array(4, 5), array(6, 7), 8);

function flatten($inputArray) : array
{
    $singleDimArray = [];
    foreach ($inputArray as $array)
    {
        if (is_array($array))
            $singleDimArray = array_merge($singleDimArray, flatten($array));
        else
            array_push($singleDimArray, $array);
    }
    return $singleDimArray;
}

var_dump(flatten($multiDimArray));