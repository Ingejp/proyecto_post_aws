<?php

namespace proyectojp\Http\Controllers;

use Illuminate\Http\Request;
use proyectojp\Post;


class HomeController extends Controller
{
    public function index(){

        //$posts = Post::all ();

        $posts = Post::with('author')->get();

        //return $posts;

        //dd($posts);
        //$posts->count();

        $name='Juan Pablo';
        return view('home', [ 'posts' => $posts ]);
    }
}
