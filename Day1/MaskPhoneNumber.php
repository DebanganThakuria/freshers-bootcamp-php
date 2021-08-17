<?php
declare(strict_types=1);

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$phoneNumber = "7577057315";

function mask($input, $start, $length) : string
{
    $replacement = str_repeat("*", $length);
    $maskedNumber = substr_replace($input, $replacement, $start, $length);
    return  $maskedNumber;
}


var_dump(mask($phoneNumber, 2, 6));