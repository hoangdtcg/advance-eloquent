<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getCategoryName($id)
    {
        $post = Post::findOrFail($id);
        return $post->category->name;
    }
}
