<?php

namespace App\Services;

use App\Models\Comment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class CommentService
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        if ($validator->fails())
        {
            $fieldsWithErrorMessagesArray = $validator->messages()->get('*');
            Log::error($fieldsWithErrorMessagesArray);
            return response()->json($fieldsWithErrorMessagesArray, 400);
        }

        try {
            $comment = new Comment();
            $comment->comment = $request->comment;
            $comment->people_id = $request->people_id;
            $comment->post_id = $request->post_id;
            $comment->save();
            return response()->json(['status' => 'successful']);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }
    }

    public function read($post)
    {
        try{
            $comments = $post->comments;
            return response()->json($comments);
        }
        catch (QueryException $e) {
            Log::error($e->errorInfo);
            return response()->json($e->errorInfo, Response::HTTP_BAD_REQUEST);
        }
    }
}
