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
                    


            @if ($latestBlog->isNotEmpty())
                @foreach ($latestBlog as $latestBlogs)
                <div class="col-lg-6 col-md-6">
                        <div class="single-blog-grid-item"><!-- single blog grid item -->
                            <div class="thumb">
                                <img src="{{ asset('uploads/'.$latestBlogs->image) }}" alt="blog images">
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li><a href="#">{{  \Carbon\Carbon::parse($latestBlogs->created_at)->format('d M, Y')}}</a></li>
                                    <li><a href="#">{{ $latestBlogs->author }}</a></li>
                                </ul>
                                <h4 class="title"><a href="#">{{ $latestBlogs->title }}</a></h4>
                                <a href="#" class="readmore">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!-- //. single blog grid item -->
                    </div>
                @endforeach    
            @endif            


                    <div class="col-lg-12">
                            
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                    <div class="sidebar widget-area"><!-- widget area -->

                        <div class="widget widget_search"><!-- widget  -->
                            <h4 class="widget-title">Search</h4>
                            <form action="/blog/search" method="GET"   class="search-form">
                                <div class="form-group">
                                    <input type="text"  name="search" class="form-control" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- //. widget -->
    
                        <div class="widget widget_categories"><!-- widget  -->
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @if ($categories->isNotEmpty())
                                  @foreach ($categories as $c)
                                    <li class="cat-item"><a href="#">{{ $c->name }}</a></li>
                                  @endforeach
                                @endif
                                
                            </ul>
                        </div>
                        <div class="widget widget_popular_posts"><!-- widget  -->
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul>
                              @foreach($popularBlog as $p)
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img  width="65" src="{{ asset('uploads/'.$p->image) }}" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">{{  \Carbon\Carbon::parse($p->created_at)->format('d M, Y')}}</span>
                                        <h4 class="title"><a href="#">{{ $p->title }}</a></h4>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud"><!-- widget -->
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @if ($tags->isNotEmpty())
                                @foreach ($tags as $tag)
                                <a href="#">{{ $tag->name }}</a>
                                @endforeach
                                @endif
                            </div>
                        </div>
    
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection