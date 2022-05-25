@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron index-jumb">
                    <h1 class="display-4">Users</h1>
                    <a class="btn hvr-pop user-create" href="{{ route('d.user.create') }}" role="button"><i class="fa-solid fa-plus"></i> Create User</a>
                </div>
            </div>
        </div>
        <table class="table users-table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1
            @endphp
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$user->name}}</td>
                    <td>
                        @if($user->isUser())
                            User
                        @else
                            Admin
                        @endif
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="admin_actions">
                            @if($user->isUser())
                                <a class="approve" href="{{route('d.user.approve', [$user->id])}}"><i class="fa-solid fa-check"></i> Approve</a>
                            @endif
                            @if(\Illuminate\Support\Facades\Auth::id() != $user->id)
                                <a class="show" href="{{route('d.user.destroy', [$user->id])}}"><i class="fa-solid fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
