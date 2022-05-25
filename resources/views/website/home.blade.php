@extends('website.layouts.app')

@section('content')
    <!-- site-main -->
    <div id="main" class="site-main">
        <div class="layout-medium">
            <div id="primary" class="content-area">
                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                    <article class="hentry page">

                        <!-- .entry-content -->
                        <div class="entry-content intro" data-animation="rotate-1">

                            <!-- .profile-image -->
                            <div class="profile-image">
                                <img alt="profile" src="{{asset('images/site/about-me-2.jpg')}}"/>
                            </div>
                            <!-- .profile-image -->

                            <h2><em>Hi.</em> I am Haley Duster</h2>
                            <h3>I am a <strong>blogger</strong> <strong>traveler</strong> <strong>writer</strong></h3>

                            <!-- .link-boxes -->
                            <figure>
                                <a href="{{route('categories')}}"><img src="{{asset('images/site/box-02.jpg')}}"
                                                                       alt="Categories"></a>
                                <figcaption class="wp-caption-text">Categories</figcaption>
                            </figure>

                            <figure>
                                <a href="{{route('features')}}"><img src="{{asset('images/site/box-03.jpg')}}"
                                                                     alt="Features"></a>
                                <figcaption class="wp-caption-text">Features</figcaption>
                            </figure>

                            <figure>
                                <a href="{{route('about')}}"><img src="{{asset('images/site/box-01.jpg')}}"
                                                                  alt="About Me"></a>
                                <figcaption class="wp-caption-text">About Me</figcaption>
                            </figure>

                            <figure>
                                <a href="https://github.com/AbdelrhmanSShalby"><img
                                        src="{{asset('images/site/box-04.jpg')}}" alt="GitHub"></a>
                                <figcaption class="wp-caption-text">Follow On GitHub</figcaption>
                            </figure>
                            <!-- .link-boxes -->

                        </div>
                        <!-- .entry-content -->

                    </article>
                    <!-- .page -->

                    <!-- .home-title -->
                    <h3 class="widget-title home-title">LATEST FROM THE BLOG</h3>

                    <!-- BLOG SIMPLE -->
                    <div class="blog-simple">

                        <!-- .hentry -->
                        <article class="hentry post has-post-thumbnail">

                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">17</span>
                                    <span class="month">May</span>
                                    <span class="year">2015</span>
                                </div>
                                <div class="featured-image"
                                     style="background-image:url({{asset('images/blog/06.jpg')}})"></div>
                            </div>
                            <!-- .hentry-left -->

                            <!-- .hentry-middle -->
                            <div class="hentry-middle">

                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{route('home')}}">Gathering with old friends</a></h2>

                            </div>
                            <!-- .hentry-middle -->

                            <a class="post-link" href="{{route('home')}}">Gathering with old friends</a>

                        </article>
                        <!-- .hentry -->

                        <!-- .hentry -->
                        <article class="hentry post has-post-thumbnail">

                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">03</span>
                                    <span class="month">Apr</span>
                                    <span class="year">2015</span>
                                </div>
                                <div class="featured-image"
                                     style="background-image:url({{asset('images/blog/07.jpg')}})"></div>
                            </div>
                            <!-- .hentry-left -->

                            <!-- .hentry-middle -->
                            <div class="hentry-middle">

                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{route('home')}}">Notes On Life</a></h2>

                            </div>
                            <!-- .hentry-middle -->

                            <a class="post-link" href="{{route('home')}}">Notes On Life</a>

                        </article>
                        <!-- .hentry -->

                        <!-- .hentry -->
                        <article class="hentry post has-post-thumbnail">

                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">09</span>
                                    <span class="month">Jan</span>
                                    <span class="year">2015</span>
                                </div>
                                <div class="featured-image"
                                     style="background-image:url({{asset('images/blog/08.jpg')}})"></div>
                            </div>
                            <!-- .hentry-left -->

                            <!-- .hentry-middle -->
                            <div class="hentry-middle">

                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{route('home')}}">Minimalist Living Tips</a></h2>

                            </div>
                            <!-- .hentry-middle -->

                            <a class="post-link" href="{{route('home')}}">Minimalist Living Tips</a>


                        </article>
                        <!-- .hentry -->

                        <!-- .hentry -->
                        <article class="hentry post has-post-thumbnail">

                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">14</span>
                                    <span class="month">Jun</span>
                                    <span class="year">2015</span>
                                </div>
                                <div class="featured-image"
                                     style="background-image:url({{asset('images/blog/09.jpg')}})"></div>
                            </div>
                            <!-- .hentry-left -->

                            <!-- .hentry-middle -->
                            <div class="hentry-middle">

                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{route('home')}}">History of The Beloved Machine</a>
                                </h2>

                            </div>
                            <!-- .hentry-middle -->

                            <a class="post-link" href="{{route('home')}}">History of The Beloved Machine</a>


                        </article>
                        <!-- .hentry -->

                        <!-- .hentry -->
                        <article class="hentry post has-post-thumbnail">

                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">25</span>
                                    <span class="month">Agu</span>
                                    <span class="year">2015</span>
                                </div>
                                <div class="featured-image"
                                     style="background-image:url({{asset('images/blog/10.jpg')}})"></div>
                            </div>
                            <!-- .hentry-left -->

                            <!-- .hentry-middle -->
                            <div class="hentry-middle">

                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{route('home')}}">Mastering Photography</a></h2>

                            </div>
                            <!-- .hentry-middle -->

                            <a class="post-link" href="{{route('home')}}">Mastering Photography</a>


                        </article>
                        <!-- .hentry -->

                    </div>
                    <!-- BLOG SIMPLE -->

                    <!-- .home-launch -->
                    <div class="home-launch">
                        <a class="button" href="{{route('home')}}">See All Posts</a>
                    </div>
                    <!-- .home-launch -->

                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->

        </div>
        <!-- layout -->

    </div>
    <!-- site-main -->
@endsection
