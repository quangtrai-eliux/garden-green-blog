@extends('layouts.app')
@section('content')  
@include('app.top3postview')   
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                            @foreach($posts as $post)
                            @if ($loop->index < 10)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="upload/garden_sq_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="garden-category.html" title="">{{$post->post_type_name}}</a></span>
                                        <h4><a href="garden-single.html" title="">{{$post->title}}</a></h4>
                                        <p>{{$post->description}}</p>
                                        <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i> {{$post->view}}</a></small>
                                        <small><a href="garden-single.html" title="">{{Carbon\Carbon::parse($post->updated_at)->format('j F, Y')}}</a></small>
                                        <small><a href="#" title="">by {{$post->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @endif
                                @endforeach                          
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
        
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                    {{ $posts->links() }}
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    @foreach($posts as $post)
                                    @if($loop->index < 3)
                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/garden_sq_09.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$post->title}}</h5>
                                                <small>{{Carbon\Carbon::parse($post->updated_at)->format('j F, Y')}}</small>
                                            </div>
                                        </a>
                                        @endif
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_04.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a href="#"><img src="upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                    @foreach($categories as $category)
                                        <li><a href="#">{{$category->category_name}}<span>(0)</span></a></li>
                                    @endforeach
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection