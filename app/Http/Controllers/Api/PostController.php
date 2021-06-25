<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //GET Blog posts
    public function index() {
        $posts = Post::all();

        return response()->json($posts);
        //oppure per passare piu dati
        // return response()->json(compact('posts',));
        
    }
}
