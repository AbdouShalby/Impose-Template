@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron edit-jumb">
                <h1 class="display-4">Edit Post</h1>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 3%">

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{$error}}</div>
            @endforeach
        @endif

        <div class="col">
            <form class="edit-form" action="{{route('d.post.update',[$post->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Title</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-brands fa-t"></i></span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="Post Title" name="title" value="{{$post->title}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Content</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-book-open"></i></span>
                        <textarea class="form-control" aria-label="Post Content" name="body" rows="4">{{$post->body}}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Image</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Category</label>
                    <select name="category" class="form-select">
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}" @if ($post->category_id == $cat->id) selected @endif >{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn update-button"><i class="fa-solid fa-circle-up"></i> Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
