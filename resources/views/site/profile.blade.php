@extends('layouts.site.master')
@section('content')
<section class="profile mt-5 pt-5" style="min-height: 70vh;">
    <!-- ================ user Header ================= -->
    <section class="offersPage">
        <div class="container">
            <div class="Departments swiper-container DepartmentsContainer gradientBG">
                <div class="nav  swiper-wrapper">
                    <!-- ================ user ================= -->
                    <a href="profile-orders.html" class="swiper-slide userHeader active">
                        <div class="userInfo">
                            <img src="{{get_user_file(user()->user()->photo)}}" >
                            <div class="data">
                                <h5> {{user()->user()->name}} </h5>
                                <p>{{user()->user()->phone}}</p>
                            </div>
                        </div>
                    </a>
                    <!-- ================ /user ================= -->

                </div>
            </div>
        </div>
    </section>
    <!-- ================ /user Header ================= -->
    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-1">
                    <div class="profileNavCol">
                        <!-- <a  href="profile-orders.html"> <i class="fas fa-bell me-2"></i> طلباتي </a> -->
                        <a class="active" href="profile-wallet.html"> <i class="fas fa-comments-alt me-2"></i>  حالة الطلب </a>
                        <!-- <a href="profile-favourite.html"> <i class="fas fa-heart me-2"></i> المفضلة</a>
                       <a href="profile-edit.html"><i class="fas fa-cog me-2"></i> تعديل البروفايل </a> -->
                        <a href="#!"><i class="fas fa-sign-out-alt me-2"></i> تسجيل الخروج </a>
                    </div>
                </div>
                <div class=" col-md-9 inside">
                    <ul class="nav justify-content-center curr-prev" id="next-prev-order" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" data-bs-target="#prevorder"
                               type="button" role="tab" aria-controls="account-dashboard" aria-selected="true"> الحالية </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" data-bs-target="#currentorder"
                               type="button" role="tab" aria-controls="account-orders" aria-selected="false"> السابقة </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="prevorder" role="tabpanel"
                             aria-labelledby="account-dashboard-tab">
                            <div class="row py-5">
                                <hr>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> رقم الطلب </strong> : # 32132 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> 10 / 1 /2021 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <a href="order-details.html"> التفاصيل </a>
                                </div>
                            </div>
                            <div class="kolshe-tap">
                                <div class="doctors">
                                    <div class="row">
                                        <div class=" col-lg-12 mb-3">
                                            <a href="#">
                                                <div data-aos="flip-down" class="contents z-depth-1">
                                                    <div class="img d-flex justify-content-center">
                                                        <img src="{{asset('site')}}/img/car/car-1.jpg"  srcset="" style="max-height: 400px;max-width: 500px;">
                                                    </div>
                                                    <div class="text">
                                                        <a href="" class=" py-2 font-weight-bold text-center text-black "> ثلاجة سامسونج 18 قدم
                                                            نوفروست </a>
                                                        <div class="my-custom-div mt-2">
                                                            <p class="price"> ثلاجة </p>
                                                            <div class="d-flex">
                                                                <p class="" style="text-decoration: line-through;"> 156 د.ع </p>
                                                                <p class="fw-bold"> 146 د.ع </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4 ">
                                                            <p class="w-50 "> <strong> الكمية : </strong> 2</p>
                                                            <p class=" "> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5">
                                <hr>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> رقم الطلب </strong> : # 32132 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> 10 / 1 /2021 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <a href="order-details.html"> التفاصيل </a>
                                </div>
                            </div>
                            <div class="kolshe-tap">
                                <div class="doctors">
                                    <div class="row">
                                        <div class=" col-lg-12 mb-3">
                                            <a href="#">
                                                <div data-aos="flip-down" class="contents z-depth-1">
                                                    <div class="img d-flex justify-content-center">
                                                        <img src="{{asset('site')}}/img/car/car-3.jpg"  srcset="" style="max-height: 400px;max-width: 500px;">
                                                    </div>
                                                    <div class="text">
                                                        <a href="" class=" py-2 font-weight-bold text-center text-black "> ثلاجة سامسونج 18 قدم
                                                            نوفروست </a>
                                                        <div class="my-custom-div mt-2">
                                                            <p class="price"> ثلاجة </p>
                                                            <div class="d-flex">
                                                                <p class="" style="text-decoration: line-through;"> 156 د.ع </p>
                                                                <p class="fw-bold"> 146 د.ع </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4 ">
                                                            <p class="w-50 "> <strong> الكمية : </strong> 2</p>
                                                            <p class=" "> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade  " id="currentorder" role="tabpanel" aria-labelledby="account-orders-tab">
                            <div class="row py-5">
                                <hr>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> رقم الطلب </strong> : # 32132 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <p> 10 / 1 /2021 </p>
                                </div>
                                <div class="col-lg-3 col-6 mb-3">
                                    <a class="goto-details" href="order-details.html"> التفاصيل </a>
                                </div>
                            </div>
                            <div class="kolshe-tap">
                                <div class="doctors">
                                    <div class="row">
                                        <div class=" col-lg-12 mb-3">
                                            <a href="#">
                                                <div data-aos="flip-down" class="contents z-depth-1">
                                                    <div class="img d-flex justify-content-center">
                                                        <img src="{{asset('site')}}/img/car/car-5.jpg"  srcset="" style="max-height: 400px;max-width: 500px;">
                                                    </div>
                                                    <div class="text">
                                                        <a href="" class=" py-2 font-weight-bold text-center text-black "> ثلاجة سامسونج 18 قدم
                                                            نوفروست </a>
                                                        <div class="my-custom-div mt-2">
                                                            <p class="price"> ثلاجة </p>
                                                            <div class="d-flex">
                                                                <p class="" style="text-decoration: line-through;"> 156 د.ع </p>
                                                                <p class="fw-bold"> 146 د.ع </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mt-4 ">
                                                            <p class="w-50 "> <strong> الكمية : </strong> 2</p>
                                                            <p class=" "> <strong> الإجمالي </strong> : 1235 د.ع </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection
