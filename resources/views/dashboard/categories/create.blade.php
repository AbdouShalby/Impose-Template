@extends('dashboard.layouts.app')

@section('content')
    <div class="container" style="padding-top: 3%">

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif

        <form class="profile-form" action="{{ route('d.category.store') }}" method="POST">
            @csrf
            <input type="hidden" name="is_admin">
            <div class="mb-3">
                <label for="basic-url" class="form-label">Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-at"></i></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="title">
                </div>
            </div>
            <div class="mb-3">
                <label for="basic-url" class="form-label">Description</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-book-open"></i></span>
                    <textarea class="form-control" aria-label="Post Content" name="description" rows="6"></textarea>
                </div>
            </div>
            <button type="submit" class="btn update-button"><i class="fa-solid fa-circle-up"></i> Create</button>
        </form>
    </div>
@endsection
