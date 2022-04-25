@extends('layouts.site.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1> الأخبار </h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('/')}}"> الرئيسية </a></li>
                <li class="active"> الأخبار </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-1.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-2.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-3.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-2.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-1.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-3.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-3.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-2.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-2">
                    <div class="photo">
                        <img src="{{asset('site')}}/img/blog/blog-1.jpg" alt="blog" class="img-fluid w-100">
                        <div class="overlay-icon">
                            <a href="{{route('postDetails')}}"><span><i class="fa fa-plus-square-o span"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">
                            <a href="{{route('postDetails')}}"> مجوعة سيارات جديدة في تويوتا  </a>
                        </h3>
                        <p>
                            لدى شركة المهندس للسيارات عدد 4 سيارات تويوتا لاندكروزر حالات زيرو
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page navigation start -->
        <div class="pagination-box hidden-mb-45 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="car-list-leftsidebar.html"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Blog body end -->
@endsection
