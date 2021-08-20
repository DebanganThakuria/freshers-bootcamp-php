<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function CreatePost(Request $request)
    {
        return $this->postService->Create($request);
    }

    public function GetAllPostsByPerson(Person $id)
    {
        return $this->postService->Read($id);
    }
}
