@extends('front.layouts.app')

@section('main')

<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title">Blog Details</h1>
                    <ul class="page-navigation">
                        <li><a href="#"> Home</a></li>
                        <li>Blog Details</li>
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
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <img src="assets/img/blog/blog-details.jpg" alt="blog image">
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-calendar-alt"></i> 12-01-2019</a></li>
                                <li><a href="#"><i class="far fa-user"></i> Admin</a></li>
                                <li class="cat"><i class="fas fa-tags"></i> <a href="#">Lifestyle</a> <a href="#">Travel</a><a href="#">Music</a></li>
                            </ul>
                            <h4 class="title">Did even but nor are most gave hope depend son repair day ladies now  </h4>
                            <p>Lorem Ipsums is simply dummy text of the print  industry. Lorem Ipsum has industry's standard dummy text ever since. Lorem Ipsums is simply dummy text of the print  industry. Lorem Ipsum has industry's standard dummy text ever since.</p>
                            <p>Proin vitae blandit felis. Proin rhoncus imperdiet facilisis. Etiam et mauris ex. Maecenas posuere ipsum orci, at imperdiet est venenatis quis. Maecenas quis fermentum ipsum, ac eleifend urna. Cras sed viverra nibh. Mauris eget finibus erat. Mauris tempor varius purus nec cursus. Nullam ornare eget ipsum sit amet consequat. Nunc finibus vitae diam non suscipit. Praesent elementum felis sit amet urna tempus commodo. Proin congue id ante ac maximus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec euismod arcu venenatis, viverra arcu eu, efficitur mauris. Aliquam sagittis sagittis elit, in cursus est faucibus in.</p>
                            <blockquote>
                                    Nunc blandit tincidunt consequat. Duis diam metus, suscipit ininar eget, egestas id arcu. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper.
                            </blockquote>
                            <p>Lorem Ipsums is simply dummy text of the print  industry. Lorem Ipsum has industry's standard dummy text ever since. Lorem Ipsums is simply dummy text of the print  industry. Lorem Ipsum has industry's standard dummy text ever since.</p>
                            <p>Proin vitae blandit felis. Proin rhoncus imperdiet facilisis. Etiam et mauris ex. Maecenas posuere ipsum orci, at imperdiet est venenatis quis. Maecenas quis fermentum ipsum, ac eleifend urna. Cras sed viverra nibh. Mauris eget finibus erat. Mauris tempor varius purus nec cursus.</p>
                        </div>
                        <div class="entry-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title">Tags: </li>
                                    <li><a href="#">Marketing</a><a href="#">Design</a></li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //. entry footer -->
    
                        <div class="comment-area"><!-- comment area -->
                            <h3 class="comment-title">03 Comments</h3>
                            <ul class="comment-list">
                                <li>
                                    <div class="single-comment-wrap"><!-- single comment wrap -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.jpg" alt="comment images">
                                           
                                        </div>
                                        <div class="content">
                                                <span class="date">12 Sep,18</span>
                                            <h4 class="title">Steve Smith</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div><!-- //. single comment wrap -->
                                </li>
                                <li class="has-children">
                                    <ul>
                                        <li>
                                            <div class="single-comment-wrap"><!-- single comment wrap -->
                                                <div class="thumb">
                                                    <img src="assets/img/comments/02.jpg" alt="comment images">
                                                    
                                                </div>
                                                <div class="content">
                                                     <span class="date">12 Sep,18</span>
                                                    <h4 class="title">Jhon Martin</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                            </div><!-- //. single comment wrap -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="single-comment-wrap"><!-- single comment wrap -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.jpg" alt="comment images">
                                           
                                        </div>
                                        <div class="content">
                                                <span class="date">12 Sep,18</span>
                                            <h4 class="title">Warner Martin</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div><!-- //. single comment wrap -->
                                </li>
                            </ul>
                        </div>
    
                        <div class="comment-form-wrap"><!-- comment form wrap --> 
                            <h3 class="title">Leave A Comment</h3>
                            <form action="blog-details.html" class="comment-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject...">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group textarea">
                                    <textarea name="message" id="message" class="form-control" placeholder="Message..." cols="30" rows="10"></textarea>
                                </div>
                                <button class="submit-btn" type="submit">Post Comment</button>
                            </form>
                        </div><!-- //.comment form wrap --> 
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