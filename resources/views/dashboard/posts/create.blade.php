@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron create-jumb">
                <h1 class="display-4">Create Post</h1>
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
            <form class="post-form" action="{{route('d.post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Title</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-brands fa-t"></i></span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="Post Title" name="title">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Content</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-book-open"></i></span>
                        <textarea class="form-control" aria-label="Post Content" name="body" rows="4"></textarea>
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
                        <option value="0">Select Cateogry</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                    </select>
                </div>
                <button type="submit" class="btn post-button"><i class="fa-solid fa-plus"></i> Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
