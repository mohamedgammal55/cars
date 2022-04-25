<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title> المهندس للسيارات</title>
    @include('layouts.site.head')
</head>
<body class="comon-index">
<div class="page_loader"></div>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

<!-- External CSS libraries -->
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/bootstrap-submenu.css">

<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/fonts/linearicons/style.css">
<link rel="stylesheet" type="text/css"  href="{{asset('site')}}/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css"  href="{{asset('site')}}/css/dropzone.css">
<link rel="stylesheet" type="text/css"  href="{{asset('site')}}/css/slick.css">
<link rel="stylesheet" type="text/css"  href="{{asset('site')}}/css/lightbox.min.css">
<link rel="stylesheet" type="text/css"  href="{{asset('site')}}/css/jnoty.css">

<!-- Custom stylesheet -->
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/sidebar.css">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/style.css"> -->
<link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/ar-style.css">
<link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('site')}}/css/skins/red.css">

<!-- Favicon icon -->
<link rel="shortcut icon" href="{{asset('site')}}/img/favicon.ico" type="image/x-icon" >
@toastr_css
<!-- sign-up section start -->
<div class="login-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 pad-0 form-section">
                <div class="form-inner">
                    <a href="{{route('/')}}" class="logo">
                        <img src="{{asset('site')}}/img/logos/black-logo.svg" alt="logo">
                    </a>
                    <h3 class="mt-4"> إنشاء حساب </h3>
                    <form id="myForm" action="{{route('postRegister')}}" >
                        @csrf
                        <div class="form-group clearfix">
                            <input name="name" type="text" class="form-control" placeholder=" الإسم بالكامل" aria-label="Full Name">
                        </div>
                        <div class="form-group clearfix">
                            <input name="phone" type="text" class="form-control" placeholder=" هاتف تواصل" aria-label="Phone">
                        </div>
                        <div class="form-group clearfix">
                            <input name="email" type="email" class="form-control" placeholder=" البريد الإلكترني " aria-label="Email Address">
                        </div>
                        <div class="form-group clearfix">
                            <input name="password" type="password" class="form-control" placeholder=" كلمة المرور " aria-label="Password">
                        </div>
{{--                        <div class="form-group checkbox clearfix">--}}
{{--                            <div class="form-check checkbox-theme float-start">--}}
{{--                                <input class="form-check-input" type="checkbox" id="agree">--}}
{{--                                <label class="form-check-label" for="agree">--}}
{{--                                    أنا أوافق على <a href="#" class="terms"> شروط الإستخدام </a>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-lg btn-4 btn-primary" id="submitButton"> تسجيل </button>
                        </div>
                        <div class="extra-login clearfix">
                            <span> تسجيل بواسطة </span>
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
                    <p> مشترك بالفعل ؟ <a href="{{route('siteLogin')}}"> تسجيل الدخول </a></p>
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


<script src="{{asset('site')}}/js/jquery-2.2.0.min.js"></script>
<script src="{{asset('site')}}/js/popper.min.js"></script>
<script src="{{asset('site')}}/js/bootstrap.bundle.min.js"></script>
<script  src="{{asset('site')}}/js/bootstrap-submenu.js"></script>
<script  src="{{asset('site')}}/js/rangeslider.js"></script>
<script  src="{{asset('site')}}/js/jquery.mb.YTPlayer.js"></script>
<script  src="{{asset('site')}}/js/bootstrap-select.min.js"></script>
<script  src="{{asset('site')}}/js/jquery.easing.1.3.js"></script>
<script  src="{{asset('site')}}/js/jquery.scrollUp.js"></script>
<script  src="{{asset('site')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="{{asset('site')}}/js/dropzone.js"></script>
<script  src="{{asset('site')}}/js/slick.min.js"></script>
<script  src="{{asset('site')}}/js/jquery.filterizr.js"></script>
<script  src="{{asset('site')}}/js/jquery.magnific-popup.min.js"></script>
<script  src="{{asset('site')}}/js/jquery.countdown.js"></script>
<script  src="{{asset('site')}}/js/jquery.mousewheel.min.js"></script>
<script  src="{{asset('site')}}/js/lightgallery-all.js"></script>
<script  src="{{asset('site')}}/js/jnoty.js"></script>
<script  src="{{asset('site')}}/js/sidebar.js"></script>
<script  src="{{asset('site')}}/js/app.js"></script>
@toastr_js
@toastr_render
<script>
    $("form#myForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = $('#myForm').attr('action');
        $.ajax({
            url:url,
            type: 'POST',
            data: formData,
            beforeSend: function(){
                $('#submitButton').html('<span style="margin-right: 4px;">انتظر ..</span><span class="spinner-border spinner-border-sm mr-2"></span> ').attr('disabled', true);
            },
            complete: function(){


            },
            success: function (data) {
                if (data.status == 200){
                    toastr.success('مرحبا بك يا '+data.name);
                    window.setTimeout(function() {
                        window.location.href='/profile';
                    }, 1000);
                }
            },
            error: function (data) {
                if (data.status === 500) {
                    $('#submitButton').html(`تسجيل`).attr('disabled', false);
                    toastr.error('هناك خطأ ما');
                }
                else if (data.status === 422) {
                    $('#submitButton').html(`تسجيل`).attr('disabled', false);
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
                    $('#submitButton').html(`تسجيل`).attr('disabled', false);
                    toastr.error('يوجد خطأ ما ..');
                }
            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

</body>
</html>
