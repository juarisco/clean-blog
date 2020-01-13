<?php

namespace App\Http\Controllers\Frontend;

use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->latest()->simplePaginate(2);

//        return $posts;

        return view('frontend.blog', compact('posts'));
    }
}
