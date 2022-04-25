@extends('layouts.site.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>تفاصيل الخبر</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('/')}}"> الرئيسية </a></li>
                <li class="active">تفاصيل الخبر</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Blog 1 start -->
                <div class="blog-1 blog-big mb-50">
                    <div class="blog-photo">
                        <img src="{{asset('site')}}/img/blog/blog-1.jpg" alt="blog-img" class="img-fluid w-100">
                    </div>
                    <div class="detail">
                        <h3>
                            <h4> سيارة تويوتا كرولا موديل 2020  </h4>
                        </h3>
                        <p>
                            لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية
                            لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية
                            لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية
                            لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية

                        </p>
                      </div>
                </div>


            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Search box -->
                    <div class="widget search-box">
                        <h3 class="sidebar-title"> بحث </h3>
                        <form class="form-inline form-search" method="GET">
                            <div class="form-group">
                                <label class="sr-only" for="textsearch2"> تبحث عن خبر ؟ </label>
                                <input type="text" class="form-control" id="textsearch2" placeholder=" بحث ">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h3 class="sidebar-title">  أخر الإعلانات </h3>
                        <div class="d-flex position-relative mb-4 recent-posts-box">
                            <a href="{{route('postDetails')}}">
                                <img src="{{asset('site')}}/img/car/small-car-3.jpg" class="flex-shrink-0 me-3" alt="...">
                            </a>
                            <div class="align-self-center">
                                <h5>
                                    <a href="car-details.html"> سيارة كيا كارينز 2022 </a>
                                </h5>
                                <div class="listing-post-meta">
                                     345,00 دينار قطري</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex position-relative mb-4 recent-posts-box">
                            <a href="{{route('postDetails')}}">
                                <img src="{{asset('site')}}/img/car/small-car-1.jpg" class="flex-shrink-0 me-3" alt="...">
                            </a>
                            <div class="align-self-center">
                                <h5>
                                    <a href="car-details.html"> سيارة كيا كارينز 2022 </a>
                                </h5>
                                <div class="listing-post-meta">
                                     345,00 دينار قطري</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex position-relative recent-posts-box">
                            <a href="{{route('postDetails')}}">
                                <img src="{{asset('site')}}/img/car/small-car-2.jpg" class="flex-shrink-0 me-3" alt="...">
                            </a>
                            <div class="align-self-center">
                                <h5>
                                    <a href="car-details.html"> سيارة كيا كارينز 2022 </a>
                                </h5>
                                <div class="listing-post-meta">
                                     345,00 دينار قطري</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Posts By Category Start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title"> الماركات </h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">  تويوتا  <span>(19)</span></a></li>
                            <li><a href="#"> فورد  <span>(22) </span></a></li>
                            <li><a href="#"> كيا  <span>(45)</span></a></li>
                            <li><a href="#">  هيونداي  <span>(21)</span> </a></li>
                         </ul>
                    </div>

                    <!-- Tags box Start -->
                    <!-- <div class="widget tags-box widget-3">
                        <h3 class="sidebar-title">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Car Dealer</a></li>
                            <li><a href="#">Auto</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Buy Car</a></li>
                            <li><a href="#">Car Website</a></li>
                            <li><a href="#">Automobile</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Car Template</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog body end -->
@endsection
