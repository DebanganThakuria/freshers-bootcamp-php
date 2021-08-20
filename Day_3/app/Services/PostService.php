<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;

class PostService
{
    public function Create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->people_id = $request->people_id;

        $post->save();

        return response()->json(['status'=>'successful']);
    }

    public function Read($person)
    {
        $posts = $person->posts;

        return response()->json([$posts]);
    }
}
