@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="jumbotron index-jumb">
                    <h1 class="display-4">Posts</h1>
                    <a class="btn hvr-pop create" href="{{route('d.post.create')}}" role="button"><i class="fa-solid fa-plus"></i> Create Post</a>
                </div>
            </div>
        </div>
        <div class="row content_row">
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <div class="card mb-3 custom_card">
                        <div class="row g-0">
                            <div class="col-md-4 post_image">
                                <img src="{{URL::asset($post->image)}}" class="img-fluid rounded-start" alt="{{$post->image}}">
                            </div>
                            <div class="col-md-8 post_content">
                                <div class="card-body">
                                    <a href="#" class="profile"><i class="fa-solid fa-user-pen"></i> {{$post->user->name}}</a>
                                    <h5 class="card-title">About: <strong><a href="{{route('d.post.show', [$post->slug])}}">{{$post->title}}</a></strong></h5>
                                    <p class="card-text"><small class="text-muted">Last updated {{$post->created_at->diffForhumans()}}</small></p>
                                    <span class="post">
                                        <p class="card-text post-title">{{$post->body}}</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="user_actions">
                            <a class="btn hvr-pop edit" href="{{route('d.post.edit', [$post->id])}}"><i class="fa-solid fa-pen"></i> Edit</a>
                            <a class="btn hvr-pop trash" href="{{route('d.post.destroy', [$post->id])}}"><i class="fa-solid fa-trash"></i> Delete</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col">
                    <div class="alert alert-dark no-posts" role="alert">No Posts</div>
                </div>
            @endif
        </div>
    </div>
@endsection
