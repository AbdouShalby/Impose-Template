@extends('website.layouts.app')

@section('content')
    <!-- site-main -->
    <div id="main" class="site-main"> <!-- .featured-top -->
        <div class="featured-top">

            <img src="{{asset('images/blog/02.jpg')}}" alt="about">

            <!-- .post-thumbnail -->
            <div class="post-thumbnail" style="background-image:url({{asset('images/blog/about-big.jpg')}})">

                <!-- .entry-header -->
                <header class="entry-header">

                    <!-- .entry-title -->
                    <h1 class="entry-title">About Me</h1>

                </header>
                <!-- .entry-header -->

            </div>
            <!-- .post-thumbnail -->

        </div>
        <!-- .featured-top -->

        <div class="layout-fixed">
            <div id="primary" class="content-area">


                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                    <article class="hentry page">

                        <!-- .entry-content -->
                        <div class="entry-content">

                            <h4>Hey there, what's up?</h4>
                            <p>Now, when you do this without getting punched in the chest, you'll have more fun. Whoa,
                                this guy's straight? It's a hug, Michael. I'm hugging you. Well, what do you expect,
                                mother? I'm afraid I just blue myself.</p>
                            <p>Guy's a pro. Get me a vodka rocks. And a piece of toast. I don't criticize you! And if
                                you're worried about criticism, sometimes a diet is the best defense. Did you enjoy your
                                meal, Mom? You drank it fast enough.</p>
                            <p>It's called 'taking advantage.' It's what gets you ahead in life. I've opened a door here
                                that I regret. Marry me. Guy's a pro.</p>

                            <h4>I am a social person</h4>

                        </div>
                        <!-- .entry-content -->

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
