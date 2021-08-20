<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PersonService;

class PersonController extends Controller
{
    protected $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    public function createPerson(Request $request)
    {
        return $this->personService->create($request);
    }

    public function getAllPerson()
    {
        return $this->personService->read();
    }
}
