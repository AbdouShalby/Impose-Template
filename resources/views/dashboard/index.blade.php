<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashbaord') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.selectBoxIt.min.js')}}"></script>
    <script src="{!! asset('js/backend.js') !!}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.selectBoxIt.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                {{  'Dashboard' }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto left-side-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('d.users') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('d.posts') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('d.categories') }}">Categories</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('d.profile') }}">
                                    <i class="fa-solid fa-circle-user"></i> Profile
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-to-bracket"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="home-stats">
                <div class="container text-center">
                    <h1>Dashboard</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stat st-members">
                                <i class="fa fa-users"></i>
                                <div class="info">
                                    Total Members
                                    <span><a href="{{route('d.users')}}">{!! \App\Models\User::where('id','=','1')->count() !!}</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat st-pending">
                                <i class="fa fa-user-plus"></i>
                                <div class="info">
                                    Total Posts
                                    <span><a href="{{route('d.posts')}}">{!! \App\Models\Post::where('id','=','1')->count() !!}</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat st-comments">
                                <i class="fa fa-comments"></i>
                                <div class="info">
                                    Total Categories
                                    <span><a href="{{route('d.categories')}}">{!!\App\Models\Category::where('id','=','1')->count() !!}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-users"></i> Latest 5 Registered Users
                                    <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled latest-users">
                                        @if(empty(\App\Models\User::latest()->first()))
                                            <div class='alert custom-message'>There's No Users To Show</div>
                                        @endif
                                        @foreach(\App\Models\User::latest()->take(5)->get() as $user)
                                            <li style="font-size: 24px">{{$user->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-users"></i> Latest 5 Posts
                                    <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled latest-users">
                                        @if(empty(\App\Models\Post::latest()->first()))
                                            <div class='alert'>There's No Users To Show</div>
                                        @endif
                                        @foreach(\App\Models\Post::latest()->take(5)->get() as $post)
                                            <li style="font-size: 24px">{{$post->title}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-users"></i> Latest 5 Categories
                                    <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled latest-users">
                                        @if(empty(\App\Models\Category::latest()->first()))
                                            <div class='alert'>There's No Users To Show</div>
                                        @endif
                                        @foreach(\App\Models\Category::latest()->take(5)->get() as $cat)
                                            <li style="font-size: 20px">{{$cat->title}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
</body>

</html>
