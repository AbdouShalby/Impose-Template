@extends('website.layouts.app')

@section('content')
    <div id="main" class="site-main">
        <div class="layout-medium">
            <div id="primary" class="content-area with-sidebar">

                <!-- site-content -->
                <div id="content" class="site-content" role="main">

                    <!-- entry-header -->
                    <header class="entry-header">
                        <h1 class="entry-title">{{$cat->title}}</h1>
                    </header>
                    <!-- entry-header -->

                    @foreach($posts as $post)
                        <!-- BLOG LIST -->
                            <div class="blog-creative  blog-stream">
                                <!-- .hentry -->
                                <article class="hentry post has-post-thumbnail">

                                    <div class="post-thumbnail post-img" style="background-image:url({{asset($post->image)}})">
                                        <a href="{{route('post.show', $post->slug)}}">{{route('post.show', $post->slug)}}</a>
                                        <!-- .entry-header -->
                                        <header class="entry-header">

                                        </header>
                                        <!-- .entry-header -->

                                    </div>

                                    <div class="post-thumbnail post-desc">

                                        <!-- .entry-header -->
                                        <header class="entry-header">

                                            <!-- .entry-title -->
                                            <h2 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h2>

                                            <p><a href="{{route('post.show', $post->slug)}}" class="more-link">View Post</a></p>

                                        </header>
                                        <!-- .entry-header -->

                                    </div>

                                </article>
                                <!-- .hentry -->
                            </div>
                            <!-- BLOG CREATIVE -->
                    @endforeach

                    <!-- post pagination -->
                    <nav class="post-pagination">
                        {!! $pagi->links() !!}
                    </nav>
                    <!-- post pagination -->

                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->
        </div>
    </div>
@endsection
