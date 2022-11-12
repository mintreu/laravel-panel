<?php

namespace Mintreu\LaravelPanel\Panel\Resources;

use App\Models\Post;

class PostResource extends Resource
{
    public string $title = 'Post';
    protected string $model = Post::class;

}
