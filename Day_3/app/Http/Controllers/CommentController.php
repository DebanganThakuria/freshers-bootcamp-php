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

    public function CreateComment(Request $request)
    {
        return $this->commentService->Create($request);
    }

    public function GetAllCommentsOnAPost(Post $id)
    {
        return $this->commentService->Read($id);
    }
}
