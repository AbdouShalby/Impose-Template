@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body admin-wait">
                        {{ __('You Are Not Admin Wait For Approval') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
