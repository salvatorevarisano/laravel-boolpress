<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //GET Blog posts
    public function index() {
        $posts = Post::paginate(6);

        return response()->json($posts);
        // per passare piu dati
        // return response()->json(compact('posts',));
        
    }

    // Get post detail by SyslogUdpHandler
    public function show($slug) {
        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();
        return response()->json($post);
    }
}
