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

        <form class="profile-form" action="{{ route('d.user.store') }}" method="POST">
            @csrf
            <input type="hidden" name="is_admin">
            <div class="mb-3">
                <label for="basic-url" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-at"></i></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name">
                </div>
            </div>
            <div class="mb-3">
                <label for="basic-url" class="form-label">E-Mail</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-envelope"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="basic-url" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-key"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="basic-url" class="form-label">Confirm Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-key"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <button type="submit" class="btn update-button"><i class="fa-solid fa-circle-up"></i> Create</button>
        </form>
    </div>
@endsection
