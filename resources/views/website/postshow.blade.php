@extends('website.layouts.app')

@section('content')
    <!-- site-main -->
    <div id="main" class="site-main"> <!-- .featured-top -->
        <div class="featured-top">

            <img src="{{asset($post->image)}}" alt="post-image">

            <!-- .post-thumbnail -->
            <div class="post-thumbnail" style="background-image:url({{asset($post->image)}})">

                <!-- .entry-header -->
                <header class="entry-header">


                    <!-- .entry-meta -->
                    <div class="entry-meta">
                        <span class="cat-links">
                            <a href="#" title="View all posts in Travel" rel="category tag">{{$cat->title}}</a>
                        </span>
                    </div>
                    <!-- .entry-meta -->

                    <!-- .entry-title -->
                    <h1 class="entry-title">{{$post->title}}</h1>

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
            <!-- .post-thumbnail -->

        </div>
        <!-- .featured-top -->


        <div class="layout-medium">
            <div id="primary" class="content-area">

                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                    <article class="hentry post single-post">

                        <!-- .entry-content -->
                        <div class="entry-content">

                        {{$post->body}}
                        <!-- .entry-content -->

                        <!-- .share-links -->
                        <div class="share-links">

                            <h3>SHARE THIS POST</h3>

                            <a rel="nofollow" target="_blank" href="mailto:?subject=I wanted you to see this post&amp;body=Check out this post : Sketching Mickey - http://themes.pixelwars.org/editor-html/blog-single.html." title="Email this post to a friend"><i class="pw-icon-mail"></i></a>

                            <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=Currently reading: 'Sketching Mickey' http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post with your followers"><i class="pw-icon-twitter"></i></a>

                            <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://themes.pixelwars.org/editor-html/blog-single.html&amp;t=Sketching Mickey" title="Share this post on Facebook"><i class="pw-icon-facebook"></i></a>

                            <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post on Google+"><i class="pw-icon-gplus"></i></a>

                        </div>
                        <!-- .share-links -->


                        <!-- .about-author -->
                        <aside class="about-author">

                            <h3>{{$user->name}}</h3>

                            <!-- .author-bio -->
                            <div class="author-bio">

                                <!-- .author-img -->
                                <div class="author-img">
                                    <a href="#"><img alt="{{$user->name}}" src="{{asset('images/site/author-1.jpg')}}" class="avatar"></a>
                                </div>
                                <!-- .author-img -->

                                <!-- .author-info -->
                                <div class="author-info">
                                    <h4 class="author-name">{{$user->name}}</h4>

                                    <p>
                                        <a class="social-link facebook" href="#"></a>
                                        <a class="social-link twitter" href="#"></a>
                                        <a class="social-link vine" href="#"></a>
                                        <a class="social-link dribbble" href="#"></a>
                                        <a class="social-link instagram" href="#"></a>
                                    </p>

                                </div>
                                <!-- .author-info -->

                            </div>
                            <!-- .author-bio -->

                        </aside>
                        <!-- .about-author -->

                        </div>

                    </article>
                    <!-- .hentry -->

                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->

        </div>
        <!-- layout -->

    </div>
    <!-- site-main -->
@endsection
