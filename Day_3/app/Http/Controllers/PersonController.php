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

    public function CreatePerson(Request $request)
    {
        return $this->personService->Create($request);
    }

    public function GetAllPerson()
    {
        return $this->personService->Read();
    }
}
