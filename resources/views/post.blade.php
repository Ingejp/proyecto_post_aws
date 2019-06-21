@extends('layouts.default')
@section('content')
    <h1>
        {{$post->title}}
    </h1>

    <p>
        {{$post->body}}
    </p>
    <button type="button" class="btn btn-info">Info</button>
    <br>

    @stop