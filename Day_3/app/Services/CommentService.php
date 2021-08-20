<?php

namespace App\Services;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentService
{
    public function Create(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment();

        $comment->comment = $request->comment;
        $comment->people_id = $request->people_id;
        $comment->post_id = $request->post_id;

        $comment->save();

        return response()->json(['status'=>'successful']);
    }

    public function Read($post)
    {
        $comments = $post->comments;

        return response()->json([$comments]);
    }
}
