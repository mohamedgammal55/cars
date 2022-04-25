@extends('layouts.site.master')
@section('content')
    <!-- Banner start -->
    <div class="banner-2">
        <div class="slider-container">

            <div class="left-slide">
                @foreach($sliders as $slider)
                    <div style="background-color:#222e56">
                        <div class="banner-info-3">
                            <h1>{{$slider->title}} </h1>
                            <p>
                                {{$slider->sub_title}}
                            </p>
                            <a href="{{$slider->button_link}}" class="btn btn-lg btn-7"> {{$slider->button_text}} </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="right-slide">
                @foreach($sliders as $slider)
                    <div style="background-image: url({{url($slider->photo)}})"></div>
                @endforeach
            </div>
            <div class="action-buttons">
                <button class="down-button">
                    <i class="fas fa-arrow-down"></i>
                </button>
                <button class="up-button">
                    <i class="fas fa-arrow-up"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Search box 3 start -->
    <div class="search-box-3 sb-7">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="إختر الماركة">
                                        <option>الماركة</option>
                                        <option>كيا</option>
                                        <option>هيونداي</option>
                                        <option>هوندا</option>
                                        <option>نيسان</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-year">
                                        <option> سنة الصنع</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-type">
                                        <option> حالة السيارة</option>
                                        <option> كسر زيرو</option>
                                        <option> مستعملة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="transmission">
                                        <option>ناقل الحركة</option>
                                        <option> أوتوماتيك</option>
                                        <option>مانيوال</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price"
                                             data-max-name="max_price" class="range-slider-ui ui-slider"
                                             aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="btn btn-block button-theme btn-md">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search box 3 end -->

    <!-- Featured car start -->
    <div class="featured-car content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1> أحدث <span> السيارات </span></h1>
                <p>تسعى شركة المهندس للسيارات للحفاظ على ثقة عملائنا</p>
            </div>
            <div class="row">
                @foreach($latestCar as $car)
                    <div class="col-lg-4 col-md-6">
                        <div class="car-box-3">
                            <div class="photo-thumbnail">
                                <div class="photo">
                                    <img class="d-block w-100" src="{{getFile($car->image)}}" alt="car">
                                    <a href="{{route('carDetails',$car->id)}}">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="tag-2 bg-active">الأحدث</div>
                                <div class="price-box">
                                    {{--                                    <span class="del"><del>دينار قطري 805.00</del></span>--}}
                                    {{--                                    <br>--}}
                                    <span> {{$car->price}}  جنية مصري</span>
                                </div>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="{{route('carDetails',$car->id)}}"> {{$car->category->title}} {{$car->sub_category->title}} </a>
                                </h1>
                                <ul class="facilities-list clearfix">
                                    @foreach($car->data as $key => $dataItem)
                                        @if($key < 5)
                                            <li>{{$dataItem->value}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured car end -->

    <!-- Service section 2 start -->
    <div class="service-section-2 bg-grea-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 align-self-center">
                    <!-- Main title -->
                    <div class="main-title main-title-3">
                        <h1>تريد شراء سيارة مميزة <span> بمواصفات خليجية </span></h1>
                        <p> لدينا إختبارات صارمة للتأكد من جودة السيارة وهذا ما يجعل سياراتنا مميزة وإعتمادية </p>
                        <a href="{{route('cars')}}"
                           class="btn btn-1 btn-md important-btn"><span> تصفح السيارات </span></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-3">
                                <div class="icon">
                                    <i class="flaticon-shield"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="#"> قيمة مقابل سعر </a></h3>
                                    <p> شركة المهندس للسيارات تسعى لتكون شركة بيع سيارات رقم 1 في الوطن العربي </p>
                                    <!-- <a class="button btn-txt" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-3">
                                <div class="icon">
                                    <i class="flaticon-deal"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="#"> قيمة مقابل سعر </a></h3>
                                    <p> شركة المهندس للسيارات تسعى لتكون شركة بيع سيارات رقم 1 في الوطن العربي </p>
                                    <!-- <a class="button btn-txt" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-3">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="#"> قيمة مقابل سعر </a></h3>
                                    <p> شركة المهندس للسيارات تسعى لتكون شركة بيع سيارات رقم 1 في الوطن العربي </p>
                                    <!-- <a class="button btn-txt" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-3">
                                <div class="icon">
                                    <i class="flaticon-support-2"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="#"> قيمة مقابل سعر </a></h3>
                                    <p> شركة المهندس للسيارات تسعى لتكون شركة بيع سيارات رقم 1 في الوطن العربي </p>
                                    <!-- <a class="button btn-txt" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section 2 end -->



    <!-- Counters strat -->
    <div class="counters-4 bg-counter">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 align-self-center">
                    <div class="main-title main-title-3">
                        <h1>أكثر من 10 سنوات من <span>  الخبرة</span></h1>
                        <p class="mb-0"> تسعى شركة المهندس دوما لتقديم أفضل السيارات لعملائنا </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="infos clearfix">
                        <div class="media counter-box b-button b-right d-flex">
                            <div class="media-left">
                                <i class="flaticon-car"></i>
                            </div>
                            <div class="media-body">
                                <h1 class="counter Starting">967</h1>
                                <p> السيارات </p>
                            </div>
                        </div>
                        <div class="media counter-box b-button d-flex">
                            <div class="media-left">
                                <i class="flaticon-blog"></i>
                            </div>
                            <div class="media-body">
                                <h1 class="counter">1276</h1>
                                <p> أراء العملاء </p>
                            </div>
                        </div>
                        <div class="media counter-box b-right d-flex">
                            <div class="media-left">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="media-body">
                                <h1 class="counter">396</h1>
                                <p> عملاء راضون </p>
                            </div>
                        </div>
                        <div class="media counter-box d-flex">
                            <div class="media-left">
                                <i class="flaticon-medal"></i>
                            </div>
                            <div class="media-body">
                                <h1 class="counter">177</h1>
                                <p> سيارات تم فحصها </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters end -->


    @if(count($teams) > 0)
        <!-- Our team 2 start -->
        <div class="our-team-2 content-area">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1> فريقنا <span> المميز </span></h1>
                    <p> نسعى في شركة المهندس للسيارات لضم أفضل الكفائات </p>
                </div>
                <div class="featured-slider row slide-box-btn slider"
                     data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($teams as $team)
                        <div class="slide slide-box">
                            <div class="team-1">
                                <div class="photo">
                                    <img src="{{get_user_file($team->photo)}}" alt="{{$team->name}}"
                                         style="height: 300px;width: 100%" class="img-fluid">
                                    <div class="overlay">
                                        <div class="border">
                                            @if($team->facebook)
                                                <div class="icon-holder">
                                                    <a href="{{$team->facebook}}" class="facebook-bg"><i
                                                            class="fa fa-facebook"></i></a>
                                                </div>
                                            @endif
                                            @if($team->twitter)
                                                <div class="icon-holder">
                                                    <a href="{{$team->twitter}}" class="twitter-bg"><i
                                                            class="fa fa-twitter"></i></a>
                                                </div>
                                            @endif
                                            @if($team->gmail)
                                                <div class="icon-holder">
                                                    <a href="mailto:{{$team->gmail}}" class="google-bg"><i
                                                            class="fa fa-google-plus"></i></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="#"> {{$team->name}} </a></h4>
                                    <h5>{{$team->job}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{route('allTeam')}}"
                       class="btn btn-1 btn-lg"><span> عرض الكل </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Our team 2 end -->
    @endif


    <!-- Full Page Search -->
    <div id="full-page-search">
        <button type="button" class="close">×</button>
        <form action="index.html#" class="search-header">
            <input type="search" value="" placeholder="type keyword(s) here"/>
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>

    <!-- Car Overview Modal -->
    <div class="car-model-2">
        <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog"
             aria-labelledby="carOverviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="carOverviewModalLabel">
                            <h4>Explore Your Dream Car</h4>
                            <h5><i class="flaticon-pin"></i> شارع الخليفة , الدوحة , قطر</h5>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row modal-raw">
                            <div class="col-lg-6 modal-left">
                                <div class="item active">
                                    <img src="{{asset('site')}}/img/car-13.jpg" alt="best-car"
                                         class="img-fluid modalLabel-1">
                                    <img src="{{asset('site')}}/img/car-14.jpg" alt="best-car"
                                         class="img-fluid modalLabel-2">
                                    <div class="sobuz">
                                        <div class="price-box">
                                            <span class="del-2">$1050.00</span>
                                        </div>
                                        <div class="ratings-2">
                                            <span class="ratings-box">4.5/5</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            ( 7 Reviews )
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 modal-right">
                                <div class="modal-right-content">
                                    <section>
                                        <h3>Features</h3>
                                        <div class="features">
                                            <ul class="bullets">
                                                <li>Cruise Control</li>
                                                <li>Airbags</li>
                                                <li>Air Conditioning</li>
                                                <li>Alarm System</li>
                                                <li>Audio Interface</li>
                                                <li>CDR Audio</li>
                                                <li>Seat Heating</li>
                                                <li>ParkAssist</li>
                                            </ul>
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Overview</h3>
                                        <ul class="bullets">
                                            <li>Model</li>
                                            <li>Year</li>
                                            <li>Condition</li>
                                            <li>Price</li>
                                            <li>Audi</li>
                                            <li>2020</li>
                                            <li>Brand New</li>
                                            <li>$178,000</li>
                                        </ul>
                                    </section>
                                    <div class="description">
                                        <h3>Description</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard.</p>
                                        <a href="" class="btn btn-md btn-round btn-theme">Show
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
