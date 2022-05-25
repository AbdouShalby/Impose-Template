@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron index-jumb">
                    <h1 class="display-4">Categories</h1>
                    <a class="btn hvr-pop user-create" href="{{ route('d.category.create') }}" role="button"><i class="fa-solid fa-plus"></i> Create Category</a>
                </div>
            </div>
        </div>
        @if($cats->count() > 0)
            <table class="table users-table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                    @foreach($cats as $cat)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$cat->title}}</td>
                            <td style="max-width: 780px">{{$cat->description}}</td>
                            <td>
                                <div class="admin_actions">
                                        <a class="approve" href="{{route('d.category.edit', [$cat->id])}}"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a class="show" href="{{route('d.category.destroy', [$cat->id])}}"><i class="fa-solid fa-trash"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="row content_row">
                <div class="col">
                    <div class="alert alert-dark no-categories" role="alert">No Categories</div>
                </div>
            </div>
        @endif
    </div>
@endsection
