@extends('layouts.site.master')
@section('content')
<!-- Login section start -->
<div class="login-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 pad-0 form-section">
                <div class="form-inner">
{{--                    <a href="index.html" class="logo mt-100">--}}
{{--                        <img src="{{asset('site')}}/img/logos/black-logo.svg" alt="logo">--}}
{{--                    </a>--}}
                    <h3 class="mt-4"> سجل الدخول لحسابك </h3>
                    <form action="{{route('postLogin')}}" method="POST" id="LoginForm">
                        @csrf
                        <div class="form-group clearfix">
                            <input name="email" required type="email" class="form-control" placeholder=" البريد الإلكتروني " aria-label="Email Address">
                        </div>
                        <div class="form-group clearfix">
                            <input name="password" required type="password" class="form-control" placeholder=" كلمة المرور " aria-label="Password">
                        </div>
                        <div class="form-group checkbox clearfix">
                            <div class="form-check checkbox-theme float-start">
                                <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    تذكرني
                                </label>
                            </div>
                            <a href="forgot-password.html" class="forgot-password"> نسيت كلمة المرور ؟ </a>
                        </div>
                        <div class="form-group clearfix">
                            <button  type="submit" id="loginButton" class="btn btn-lg btn-4 btn-primary"> دخول </button>
                        </div>
                        <div class="extra-login clearfix">
                            <span> أو تسجيل الدخول بواسطة </span>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <div class="social-list">
                        <a href="{{url('redirect/facebook')}}" class="facebook-bg">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="google-bg">
                            <i class="fa fa-google"></i>
                        </a>

                    </div>
                    <p> لست مشترك ؟ <a href="{{route('siteRegister')}}" class="thembo">  إشتراك </a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>        شركة  <span> المهندس للسيارات </span></h1>
                    <p>
                        شركة المهندس للسيارات شركة متخصصة في بيع أفضل السيارات
                        إستعمال الخليج ومواصفات خليجية
                        إذا كنت تفكر في إقتناء سيارة فنحن أفضل أختيار
                        ما عليك سوى إختيار السيارة وسوف نوصلها لك
                         حتى المنزل
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login section end -->

<!-- Full Page Search -->

@endsection
@section('site_js')
        <script>
            $("form#LoginForm").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var url = $('#LoginForm').attr('action');
                $.ajax({
                    url:url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function(){
                        $('#loginButton').html('<span style="margin-right: 4px;">انتظر ..</span><span class="spinner-border spinner-border-sm mr-2"></span> ').attr('disabled', true);
                    },
                    complete: function(){


                    },
                    success: function (data) {
                        if (data.status == 200){
                            toastr.success('مرحبا بك يا '+data.name);
                            window.setTimeout(function() {
                                window.location.href='/profile';
                            }, 1000);
                        }else {
                            toastr.error('بيانات الدخول غير صحيحة');
                            $('#loginButton').html(`دخول`).attr('disabled', false);
                        }
                    },
                    error: function (data) {
                        if (data.status === 500) {
                            $('#loginButton').html(`دخول`).attr('disabled', false);
                            toastr.error('هناك خطأ ما');
                        }
                        else if (data.status === 422) {
                            $('#loginButton').html(`دخول`).attr('disabled', false);
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        toastr.error(value);
                                    });

                                } else {
                                }
                            });
                        }else {
                            $('#loginButton').html(`دخول`).attr('disabled', false);
                            toastr.error('يوجد خطأ ما ..');
                        }
                    },//end error method

                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        </script>
@endsection
