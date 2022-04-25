@extends('layouts.site.master')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner" style="background-image: url({{getFile($car->image)}})">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1> تفاصيل السيارة </h1>
                <ul class="breadcrumbs">
                    <li><a href="/"> الرئيسية </a></li>
                    <li class="active"> تفاصيل السيارة</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Car details page start -->
    <div class="car-details-page content-area-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="car-details-section">
                        <!-- Heading start -->
                        <div class="heading-car clearfix">
                            <div class="pull-left">
                                <h3>{{$car->category->title}} {{$car->sub_category->title}}</h3>

                            </div>
                            <div class="pull-right">
                                <h3><span> {{$car->price}} جنية مصري</span></h3>

                            </div>
                        </div>
                        <div class="product-slider-box clearfix mb-30">
                            <div class="product-img-slide">
                                <div class="slider-for">
                                    <img src="{{getFile($car->image)}}" style="margin-top:5px" class="img-fluid w-100" alt="slider-car">
                                    @foreach($car->images as $image)
                                        <img src="{{getFile($image->image)}}" style="margin-top:5px" class="img-fluid w-100" alt="slider-car">
                                    @endforeach
                                </div>
                                <div class="slider-nav">
                                    <img src="{{getFile($car->image)}}" style="margin-top:5px" class="img-fluid" alt="slider-car">
                                    @foreach($car->images as $image)
                                        <div class="thumb-slide"><img style="margin-top:5px" src="{{getFile($image->image)}}"
                                                                      class="img-fluid" alt="small-car"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Advanced search start -->
                        <div class="widget-2 advanced-search bg-grea-2 as-2">
                            <h3 class="sidebar-title"> تفاصيل السيارة </h3>
                            <ul>
                                @foreach($car->data as $dataItem)
                                <li>
                                    <span> {{$dataItem->key}} </span> {{$dataItem->value}}
                                </li>
                                @endforeach


                            </ul>
                        </div>
                        <!-- Tabbing box start -->
                        <div class="tabbing tabbing-box mb-40">


                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div class="car-description mb-50">
                                        {!! $car->description !!}
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Contact 2 start -->
                        <div class="contact-2 ca mb-50">

                            <div class="row">

                                <div class="col-8">
                                    <div class="send-btn text-left">
                                        <button type="button" class="btn btn-primary btn-4 btn-md"> دفع جدية شراء
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="send-btn text-left">
                                        <button type="button" class="btn btn-primary btn-4 btn-md" disabled> شراء
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search d-none-992">
                            <h3 class="sidebar-title"> تفاصيل السيارة </h3>
                            <ul>
                                @foreach($car->data as $dataItem)
                                    <li>
                                        <span> {{$dataItem->key}} </span> {{$dataItem->value}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Properties details page end -->
@endsection
