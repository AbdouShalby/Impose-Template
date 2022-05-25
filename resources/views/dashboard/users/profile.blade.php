@extends('dashboard.layouts.app')

@section('content')
    @php
        $genderArray  =   ['Male', 'Female']
    @endphp
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

        <form class="profile-form" action="{{ route('d.profile.update') }}" method="POST">
            @csrf
            @method('PUT')
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
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$user->profile->city}}" name="city">
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
            <button type="submit" class="btn update-button"><i class="fa-solid fa-circle-up"></i> Update</button>
        </form>
    </div>
@endsection
