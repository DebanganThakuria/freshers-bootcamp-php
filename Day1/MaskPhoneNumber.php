<?php
declare(strict_types=1);
namespace Day1;

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$phoneNumber = "7577057315";

$maskedNumber = substr_replace($phoneNumber,"******",2,6);

var_dump($maskedNumber);