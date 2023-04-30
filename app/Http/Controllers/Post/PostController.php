<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::paginate(5));
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }
}
