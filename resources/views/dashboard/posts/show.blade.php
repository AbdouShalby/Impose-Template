@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="show-post">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4 hvr-grow">{{$post->title}}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3 image">
                    <img src="{{URL::asset($post->image)}}" alt="{{$post->image}}">
                </div>
                <div class="input-group mb-3 post">
                    <p class="post-title">{{$post->body}}</p>
                </div>
                <p class="card-text">Last updated {{$post->created_at->diffForhumans()}}</p>
            </div>
            <div class="user_actions">
                <a class="btn hvr-pop edit" href="{{route('d.post.edit', [$post->id])}}"><i class="fa-solid fa-pen"></i> Edit</a>
                <a class="btn hvr-pop trash" href="{{route('d.post.destroy', [$post->id])}}"><i class="fa-solid fa-trash"></i> Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
