<?php

namespace App\Services;

use App\Models\Person;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonService
{
    public function Create(Request $request)
    {
        $request->validate([
            'username' => 'bail|required|max:255',
            'email' => 'bail|required',
        ]);

        $person = new Person();

        $person->username = $request->input('username');
        $person->email = $request->input('email');

        try {
            $person->save();
        }
        catch (QueryException $e) {
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['status'=>'successful'], 200);
    }

    public function Read()
    {
        try {
            $person = Person::all();
        }
        catch (QueryException $e) {
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }

        return response()->json([$person], 200);
    }
}
