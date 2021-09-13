<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostService\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $post_service)
    {
        $this->postService = $post_service;
    }

    public function create(PostRequest $request)
    {
        return $this->postService->createAndNotify($request->all());
    }
}
