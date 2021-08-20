<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PostService
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        if ($validator->fails())
        {
            $fieldsWithErrorMessagesArray = $validator->messages()->get('*');
            Log::error($fieldsWithErrorMessagesArray);
            return response()->json($fieldsWithErrorMessagesArray, 400);
        }

        try {
            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->people_id = $request->people_id;
            $post->save();
            return response()->json(['status'=>'successful']);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }

    }

    public function read($person)
    {
        try{
            $posts = $person->posts;

            return response()->json($posts);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }
    }
}
