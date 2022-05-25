@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <div class="show-post">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4 hvr-grow">{{$user->name}}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Username</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-at"></i></span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$user->name}}" name="name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">City</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-house"></i></span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$user->profile}}" name="city">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Facebook</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-brands fa-facebook"></i></span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$user->profile->facebook}}" name="facebook">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Bio</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-address-card"></i></span>
                        <textarea class="form-control" aria-label="With textarea" name="bio" rows="4">{!! $user->profile->bio !!}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Gender</label>
                    <select class="form-select" aria-label="Default select example" name="gender">
                        @foreach($genderArray as $item)
                            <option value="{{$item}}" {{($user->profile->gender === $item) ? 'selected' : ''}}>{{$item}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
