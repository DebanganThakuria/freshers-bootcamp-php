<?php

namespace App\Services;

use App\Models\Person;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PersonService
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'bail|required|unique:people|max:255',
            'email' => 'bail|required|unique:people|email',
        ]);
        if ($validator->fails())
        {
            $fieldsWithErrorMessagesArray = $validator->messages()->get('*');
            Log::error($fieldsWithErrorMessagesArray);
            return response()->json($fieldsWithErrorMessagesArray, 400);
        }

        try {
            $person = new Person();
            $person->username = $request->input('username');
            $person->email = $request->input('email');
            $person->save();
            return response()->json(['status'=>'successful'], 200);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }
    }

    public function read()
    {
        try {
            $person = Person::all();
            return response()->json($person, 200);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }
    }
}
