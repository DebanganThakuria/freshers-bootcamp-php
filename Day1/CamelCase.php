<?php
declare(strict_types=1);

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$snakeCase = ["snake_case", "camel_case"];

function convert($input) : array
{
    $camelCase = [];
    for ($i = 0; $i < count($input); $i ++)
    {
        $resultString = lcfirst(implode('', array_map('ucfirst', explode('_', $input[$i]))));
        array_push($camelCase, $resultString);
    }
    return $camelCase;
}

var_dump(convert($snakeCase));