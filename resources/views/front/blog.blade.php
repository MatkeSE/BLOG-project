@extends('front.layouts.app')

@section('main')

<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title">Blog</h1>
                    <ul class="page-navigation">
                        <li><a href="#"> Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/01.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">Mobile apps are becoming popular in 3rd world</a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/02.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">Depart do be so he enough talent. Sociable for</a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/03.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">At name no an what Pressed my by do affixed </a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/04.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">Do am he horrible distance marriage so alth</a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/05.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">His many same been well can high that did law</a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="assets/img/blog/06.jpg" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">21 Aug, 2018 </a></li>
                                    <li><a href="#">By Adam helen</a></li>
                                </ul>
                                <h4 class="title"><a href="#">He into walk roof made tall cold he jelings</a></h4>
                                <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                    <div class="col-lg-12">
                            <div class="blog-pagination margin-top-10"><!-- blog pagination -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                                <i class="fas fa-chevron-right"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- //. blog pagination -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                    <div class="sidebar widget-area"><!-- widget area -->

                        <div class="widget widget_search"><!-- widget  -->
                            <h4 class="widget-title">Search</h4>
                            <form action="blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- //. widget -->
    
                        <div class="widget widget_categories"><!-- widget  -->
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li class="cat-item"><a href="#">Lifestyle</a></li>
                                <li class="cat-item"><a href="#">Travel</a></li>
                                <li class="cat-item"><a href="#">Fashion</a></li>
                                <li class="cat-item"><a href="#">Music</a></li>
                                <li class="cat-item"><a href="#">Branding</a></li>
                                <li class="cat-item"><a href="#">History</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_popular_posts"><!-- widget  -->
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul>
    
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/01.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/02.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/03.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
    
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud"><!-- widget -->
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">Events</a>
                                <a href="#">Love</a>
                                <a href="#">Story</a>
                                <a href="#">Gift</a>
                                <a href="#">Events</a>
                                <a href="#">First Metting</a>
                                <a href="#">Couple</a>
                            </div>
                        </div>
    
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection