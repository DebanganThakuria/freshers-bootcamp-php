<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function createPerson(Request $request){
        DB::table('persons')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        echo "person $request is created";
    }

    public function getAllPersons(){
        $persons = DB::table('persons')->get() ;

        return $persons;
    }

    public function getPersonById($id){
        $person = DB::table('persons')->where('id', $id)->first();

        return $person;
    }

    public function deletePerson($id){
        DB::table('persons')->where('id', $id)->delete();

        echo "person $id is deleted";
    }
}


