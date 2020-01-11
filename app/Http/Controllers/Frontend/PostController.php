<?php

namespace App\Http\Controllers\Frontend;

use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(Post $post)
    {
        return view('frontend.post', compact('post'));
    }
}
