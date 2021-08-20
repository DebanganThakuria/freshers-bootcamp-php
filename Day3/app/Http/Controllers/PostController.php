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

    public function createPost(Request $request)
    {
        return $this->postService->create($request);
    }

    public function getAllPostsByPerson(Person $id)
    {
        return $this->postService->read($id);
    }
}
