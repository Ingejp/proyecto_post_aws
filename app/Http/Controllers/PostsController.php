<?php

namespace proyectojp\Http\Controllers;

use Illuminate\Http\Request;
use proyectojp\Post;

class PostsController extends Controller
{
    public function show($id){
        $post =  Post::findOrFail($id);
        return view('post', ['post' => $post]);
    }
}
