<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function createComment(Request $request)
    {
        return $this->commentService->create($request);
    }

    public function getAllCommentsOnAPost(Post $id)
    {
        return $this->commentService->read($id);
    }
}
