<?php
declare(strict_types=1);
namespace Day1;

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$snakeCase = ["snake_case", "camel_case"];

$camelCase = [];

for ($i = 0; $i < count($snakeCase); $i ++)
{
    $resultString = lcfirst(implode('', array_map('ucfirst', explode('_', $snakeCase[$i]))));
    array_push($camelCase, $resultString);
}

var_dump($camelCase);