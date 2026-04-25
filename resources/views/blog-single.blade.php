<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Creative Agency Responsive HTML5 Template. Built with Bootstrap, HTML5, CSS3 and jQuery.">
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Labflox, Portfolio">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $blog->title }} - Biolab</title>

        @include('partials.styles')
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader clock text-center">
            <div class="labfloxLoader">
                <div class="loaderO">
                    <span>L</span>
                    <span>A</span>
                    <span>B</span>
                    <span>F</span>
                    <span>L</span>
                    <span>O</span>
                    <span>X</span>
                </div>
            </div>
        </div>
        <!-- Header Start -->
        <header class="header01 isSticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navArea">
                            <div class="logo logo--large">
                                <a href="{{ route('home') }}"><img src="{{ asset('biolab_assets/images/biolab-logo.png') }}" alt="Labflox"/></a>
                            </div>
                            <nav class="mainMenu">

                            </nav>
                            <div class="accessNav">
                                <div class="phoneCall">
                                    <i class="fa fa-phone"></i>
                                    <span>24/7 Emergency Phone</span>
                                    <h6>+36 55 540 069</h6>
                                </div>
                                <a href="{{ route('appointment') }}" class="lab_btn lightHover requestBTN"><span><i class="fa fa-calendar-plus-o"></i>Request Appointment</span></a>
                                <a href="javascript:void(0);" class="menuBtn"><span><i class="fa fa-bars"></i>Menu</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Banner Start -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            <h5>{{ $blog->category }}</h5>
                            <h2>{{ $blog->title }}</h2>
                            <div class="pageBreadCum">
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-right"></i>
                                <span>Blog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Blog Section Start -->
        <section class="blogDetailsPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blogDetailsThumb">
                            <img src="{{ $blog->image_path ? asset('storage/'.$blog->image_path) : asset('biolab_assets/images/news/11.jpg') }}" alt="{{ $blog->title }}"/>
                        </div>
                        <div class="newsContentArea">
                            <div class="niDate roboto">
                                <span>{{ $blog->created_at->format('d') }}</span>
                                <span>{{ $blog->created_at->format('M') }}</span>
                            </div>
                            <div class="niMeta">
                                <span><i class="fa fa-tags"></i><a href="javascript:void(0);">{{ $blog->category }}</a></span>
                                <span><i class="fa fa-user"></i><a href="javascript:void(0);">Admin</a></span>
                                <span><i class="fa fa-comment"></i><a href="javascript:void(0);">0 Comments</a></span>
                            </div>
                            <h2 class="post-title">{{ $blog->title }}</h2>
                            <div class="newsContent clearfix">
                                {!! nl2br(e($blog->content)) !!}
                            </div>
                            <div class="newsFooter">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tagsArea">
                                            <span>Tags:</span>
                                            <a href="#">{{ $blog->category }}</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 clearfix">
                                        <a href="#" class="sharePost pull-right"><i class="fa fa-share-alt"></i>Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget search-widget">
                                <form method="get" action="#" class="searchForm">
                                    <input type="search" name="s" placeholder="Search"/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </aside>
                            <aside class="widget">
                                <h3 class="widgetTitle">Latest Post</h3>
                                <div class="latestPost">
                                    @forelse ($latestBlogs as $latestBlog)
                                        <div class="lpSingle">
                                            <img src="{{ $latestBlog->image_path ? asset('storage/'.$latestBlog->image_path) : asset('biolab_assets/images/news/'.((($loop->index + 1) % 3) + 8).'.jpg') }}" alt="{{ $latestBlog->title }}"/>
                                            <h3><a href="{{ route('blog.single', $latestBlog) }}">{{ $latestBlog->title }}</a></h3>
                                            <span>{{ $latestBlog->created_at->format('F d, Y') }}</span>
                                        </div>
                                    @empty
                                        <p>No other posts yet.</p>
                                    @endforelse
                                </div>
                            </aside>
                            <aside class="widget">
                                <h3 class="widgetTitle">Categories</h3>
                                <ul>
                                    @forelse ($categories as $category)
                                        <li><a href="#">{{ $category }}</a></li>
                                    @empty
                                        <li><a href="#">No categories</a></li>
                                    @endforelse
                                </ul>
                            </aside>
                            <aside class="widget">
                                <h3 class="widgetTitle">Tags</h3>
                                <div class="tagcloud">
                                    @foreach ($categories as $category)
                                        <a href="#">{{ $category }}</a>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

        @include('footer')

        <!-- Back To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="fa fa-angle-double-up"></i></a>
        <!-- Back To Top -->

        @include('partials.scripts')
    </body>
</html>
