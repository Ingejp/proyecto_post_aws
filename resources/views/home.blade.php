@extends('layouts.default')
@section('content')
   <h1> Estos son los post </h1>

   <ul>
    @foreach($posts as $post)
       <li>
            <!-- <a href="/posts/{{$post ->id}}">{{$post->name}}</a>-->
            <!-- <a href="{{url("posts/{$post->id}")}} ">{{$post->name}}</a>-->
                <a href="{{route('post_show_path', $post->id)}} ">
                    {{$post->title}}</a>


           {{$post->author->name}}

       </li>
    @endforeach
   </ul>

    @stop
