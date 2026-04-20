<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Creative Agency Responsive HTML5 Template. Built with Bootstrap, HTML5, CSS3 and jQuery.">
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Labflox, Portfolio">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biolab - Blog Details</title>

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
                                <a href="{{ route('home') }}"><img src="biolab_assets/images/biolab-logo.png" alt="Labflox"/></a>
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
                            <h5>Latest Blog</h5>
                            <h2>19 Ways to Balance Your Hormones Naturally</h2>
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
                            <img src="biolab_assets/images/news/11.jpg" alt="Labflox"/>
                        </div>
                        <div class="newsContentArea">
                            <div class="niDate roboto"><span>25</span><span>Oct</span></div>
                            <div class="niMeta">
                                <span><i class="fa fa-tags"></i><a href="javascript:void(0);">Research</a></span>
                                <span><i class="fa fa-user"></i><a href="javascript:void(0);">Admin</a></span>
                                <span><i class="fa fa-comment"></i><a href="javascript:void(0);">05 Comments</a></span>
                            </div>
                            <h2 class="post-title">19 Ways to Balance Your Hormones Naturally</h2>
                            <div class="newsContent clearfix">
                                <p class="mb44">
                                    Rigorously reported, peer reviewed and immediately available without restrictions, promoting the widest readership and impact possible 
                                    We encourage you to consider the scope of each journal before submission, as journals are editorially independent and specialized 
                                    in their publication criteria and breadth of content.
                                </p>
                                <blockquote class="wp-block-quote">
                                    <p>We encourage you to consider the scope of each journal before submission, as journals are editorially independent and specialized in their publication criteria and breadth of content.</p>
                                    <cite><strong>– Michal Smart</strong></cite>
                                </blockquote>
                                <h3>Why This?</h3>
                                <p>
                                    Promoting the widest readership and impact possible We encourage you to consider the scope of each journal before submission, as 
                                    journals are editorially independent and specialized in their publication criteria and breadth of content.
                                </p>
                            </div>
                            <div class="newsFooter">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tagsArea">
                                            <span>Tags:</span>
                                            <a href="#">Test</a>
                                            <a href="#">Health</a>
                                            <a href="#">Courses</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 clearfix">
                                        <a href="#" class="sharePost pull-right"><i class="fa fa-share-alt"></i>Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="commentListArea">
                            <h3>Comments (04)</h3>
                            <ol class="comment-list">
                                <li>
                                    <article class="single_comment clearfix ">
                                        <img src="biolab_assets/images/author/14.jpg" alt="Amy Burton">
                                        <h4 class="cm_subject">Good Tours</h4>
                                        <div class="sc_content">
                                            <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <span class="cm_date">June 6, 2021 <span>- BY</span>  Milon Non</span>
                                        <a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i>Reply</a>
                                    </article>
                                    <ol class="children">
                                        <li>
                                            <article class="single_comment clearfix ">
                                                <img src="biolab_assets/images/author/14.jpg" alt="Amy Burton">
                                                <h4 class="cm_subject">So Good</h4>
                                                <div class="sc_content">
                                                    <p>Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                                <span class="cm_date">June 6, 2021 <span>- BY</span>  Milon Non</span>
                                                <a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i>Reply</a>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <article class="single_comment clearfix ">
                                        <img src="biolab_assets/images/author/14.jpg" alt="Amy Burton">
                                        <h4 class="cm_subject">Good Tours</h4>
                                        <div class="sc_content">
                                            <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <span class="cm_date">June 6, 2021 <span>- BY</span>  Milon Non</span>
                                        <a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i>Reply</a>
                                    </article>
                                </li>
                            </ol>
                        </div>
                        <div class="commentArea">
                            <h3>Post Comment</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form method="post" action="#" class="commentForm row">
                                <div class="col-lg-6">
                                    <input type="text" name="com_name" placeholder="Enter Name"/>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="com_email" placeholder="Email Address"/>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="comment" placeholder="Post Comment"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="lab_btn darkHover"><span>Post Comment</span></button>
                                </div>
                            </form>
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
                                    <div class="lpSingle">
                                        <img src="biolab_assets/images/news/8.jpg" alt="Labflox"/>
                                        <h3><a href="{{ route('blog.single') }}">19 Ways to Balance Your Hormones Naturally</a></h3>
                                        <span>July 09, 2021</span>
                                    </div>
                                    <div class="lpSingle">
                                        <img src="biolab_assets/images/news/9.jpg" alt="Labflox"/>
                                        <h3><a href="{{ route('blog.single') }}">19 Ways to Balance Your Hormones Naturally</a></h3>
                                        <span>July 09, 2021</span>
                                    </div>
                                    <div class="lpSingle">
                                        <img src="biolab_assets/images/news/10.jpg" alt="Labflox"/>
                                        <h3><a href="{{ route('blog.single') }}">19 Ways to Balance Your Hormones Naturally</a></h3>
                                        <span>July 09, 2021</span>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h3 class="widgetTitle">Categories</h3>
                                <ul>
                                    <li><a href="#">Science</a></li>
                                    <li><a href="#">Technolgy</a></li>
                                    <li><a href="#">Laborotory</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Research</a></li>
                                </ul>
                            </aside>
                            <aside class="widget">
                                <h3 class="widgetTitle">Tags</h3>
                                <div class="tagcloud">
                                    <a href="#">Plumbing</a>
                                    <a href="#">Repair</a>
                                    <a href="#">App</a>
                                    <a href="#">Business</a>
                                    <a href="#">Social</a>
                                    <a href="#">Clean</a>
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
