@extends('website.layouts.app')

@section('content')
    <!-- site-main -->
    <div id="main" class="site-main">

        <div class="layout-medium">
            <div id="primary" class="content-area with-sidebar">

                <!-- site-content -->
                <div id="content" class="site-content" role="main">

                    <!-- entry-header -->
                    <header class="entry-header">
                        <h1 class="entry-title">Posts</h1>
                    </header>
                    <!-- entry-header -->

                    <!-- BLOG LIST -->
                    <div class="blog-creative  blog-stream">

                        @if(count($posts) >= 1)
                            @foreach($posts as $post)
                                <!-- .hentry -->
                                    <article class="hentry post has-post-thumbnail">

                                        <div class="post-thumbnail post-img" style="background-image:url({{asset($post->image)}})">
                                            <a href="{{route('post.show', $post->slug)}}">{{route('post.show', $post->slug)}}</a>

                                            <!-- .entry-header -->
                                            <header class="entry-header">

                                                <!-- .entry-meta -->
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        <time class="entry-date" datetime="{{$post->created_at->diffForhumans()}}">{{$post->created_at->diffForhumans()}}</time>
                                                    </span>
                                                </div>
                                                <!-- .entry-meta -->

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
                            @endforeach
                        @else
                            <!-- .hentry -->
                                <article class="hentry post has-post-thumbnail">

                                    <div class="post-thumbnail post-img" style="background-image:url({{asset('images/blog/07.jpg')}})">
                                        <a href="#">There's No Posts</a>

                                    </div>

                                    <div class="post-thumbnail post-desc">

                                        <!-- .entry-header -->
                                        <header class="entry-header">

                                            <!-- .entry-title -->
                                            <h2 class="entry-title"><a href="#">There's No Posts</a></h2>

                                            <p><a href="#" class="more-link">Ok</a></p>

                                        </header>
                                        <!-- .entry-header -->

                                    </div>

                                </article>
                            <!-- .hentry -->
                        @endif

                    </div>
                    <!-- BLOG CREATIVE -->

                    <!-- post pagination -->
                    <nav class="post-pagination">
                        {!! $pagi->links() !!}
                    </nav>
                    <!-- post pagination -->

                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->

            <!-- #secondary -->
            <div id="secondary" class="widget-area sidebar" role="complementary">

                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">About Me</h3>
                    <div class="textwidget">
                        <p><img src="{{asset('images/site/about-me.jpg')}}" alt="avatar"></p>
                        <p>Hello. I am a freelance writer. I live in a small town somewhere in the world. I write about design and biking.</p>
                    </div>
                </aside>
                <!-- widget : text -->

                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">Follow Me</h3>
                    <div class="textwidget">
                        <p>
                            <a class="social-link facebook" href="#"></a>
                            <a class="social-link twitter" href="#"></a>
                            <a class="social-link vine" href="#"></a>
                            <a class="social-link dribbble" href="#"></a>
                            <a class="social-link instagram" href="#"></a>
                        </p>
                    </div>
                </aside>
                <!-- widget : text -->

                <!-- widget : popular-posts -->
                <!-- styles for plugin : https://wordpress.org/plugins/top-10 -->
                <aside class="widget widget_widget_tptn_pop">
                    <h3 class="widget-title">Trending Posts</h3>
                    <div class="tptn_posts tptn_posts_widget">
                        <ul>

                            @foreach($posts as $post)
                                <li>
                                    <a href="{{route('post.show', $post->slug)}}" class="tptn_link">
                                        <img src="{{asset($post->image)}}" alt="post-image" class="tptn_thumb">
                                    </a>
                                    <span class="tptn_after_thumb">
                                        <a href="{{route('post.show', $post->slug)}}" class="tptn_link"><span class="tptn_title">{{$post->title}}</span></a>
                                        <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                        <span class="tptn_date">{{$post->created_at->diffForhumans()}}</span>
                                    </span>
                                </li>
                            @endforeach

                        </ul>

                    </div>

                </aside>
                <!-- widget : popular-posts -->

                <!-- widget : text -->
                <aside class="widget widget_text">
                    <!--<h3 class="widget-title">BANNER</h3>-->
                    <div class="textwidget">
                        <a href="#"><img src="{{asset('images/blog/banner.jpg')}}" alt="banner"></a>
                    </div>
                </aside>
                <!-- widget : text -->

            </div>
            <!-- #secondary -->

        </div>
        <!-- layout -->

    </div>
    <!-- site-main -->
@endsection
