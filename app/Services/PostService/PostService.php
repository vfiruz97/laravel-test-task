<?php

namespace App\Services\PostService;

use App\Contracts\Services\PostSeviceContact;
use App\Events\PublishedNewPost;
use App\Repositories\PostRepository\PostRepository;

class PostService extends PostSeviceContact
{
    protected $postRepository;

    public function __construct(PostRepository $post_repository)
    {
        $this->postRepository = $post_repository;
    }

    public function createAndNotify(array $post)
    {
        $data = $this->postRepository->create($post);
        event(new PublishedNewPost($data));
        return $data;
    }
}
