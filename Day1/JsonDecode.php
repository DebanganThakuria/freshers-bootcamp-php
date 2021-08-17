<?php
declare(strict_types=1);
namespace Day1;

/*
 * This file is part of the freshers-bootcamp-php, Day 1 exercises
 *
 * (c) Debangan
 */

$json = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"Age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

$data = json_decode($json, TRUE);

$names = [];
$ages = [];
$cities = [];

foreach ($data["players"] as $val)
{
    array_push($names, $val["name"]);
    array_push($ages, $val["age"]);
    array_push($cities, $val["address"]["city"]);
}

echo "Names, Age and City\n";
print_r($names); print_r($ages); print_r($cities);

$uniqueNames = array_unique($names);
echo "All unique names:\n";
print_r($uniqueNames);

$maxAge = max($ages);
$maxAgePersons = [];
foreach($data["players"] as $val)
{
    if($val["age"] == $maxAge)
    {
        array_push($maxAgePersons, $val["name"]);
    }
}

echo "The names of Persons with max age:\n";
print_r($maxAgePersons);