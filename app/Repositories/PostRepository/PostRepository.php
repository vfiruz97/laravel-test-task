<?php

namespace App\Repositories\PostRepository;

use App\Contracts\Repositories\PostRepositoryContact;
use App\Models\Post;

class PostRepository extends PostRepositoryContact
{
    protected $post;

    public function __construct(Post $post_m)
    {
        $this->post = $post_m;
    }

    public function create(array $post)
    {
        return $this->post->create($post);
    }
}
