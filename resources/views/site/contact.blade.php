@extends('layouts.site.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1> تواصل معنا </h1>
            <ul class="breadcrumbs">
                <li><a href="index.html"> الرئيسية </a></li>
                <li class="active"> تواصل معنا </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1> تواصل  <span> معنا </span></h1>
            <p>  هل لديك أي إستفسار ؟ نحن موجودين على مدار الساعه </p>
        </div>
        <form action="{{route('create.contact')}}" id="contactForm" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-full-name" name="name" placeholder="  الإسم بالكامل ">
                                <label for="floating-full-name">  الإسم بالكامل  </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floating-email-address" name="email" placeholder="Email Address">
                                <label for="floating-email-address"> البريد الإلكتروني </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-subject" name="title" placeholder="الموضوع">
                                <label for="floating-subject">الموضوع</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-phone-Number" name="phone" placeholder="رقم الجوال" maxlength="20" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                <label for="floating-phone-Number">رقم الجوال</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="رسالتك" id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">رسالتك</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send-btn text-center">
                                <button type="submit" id="sendBtn" class="btn btn-primary btn-4 btn-lg">  إرسال</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-2">
                        <div class="ci-box d-flex mb-3">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="detail">
                                <h5>Phone:</h5>
                                <p><a href="#">0477 8556 552</a></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex  mb-3">
                            <div class="icon">
                                <i class="flaticon-mail"></i>
                            </div>
                            <div class="detail">
                                <h5>Email:</h5>
                                <p><a href="#">  info@mail.com</a></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex  mb-3">
                            <div class="icon">
                                <i class="flaticon-earth"></i>
                            </div>
                            <div class="detail">
                                <h5>Web:</h5>
                                <p><a href="#">  info@mail.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#" class="search-header">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>
@endsection
@section('site_js')
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 25.2639755;
        var defaultLng = 51.5337287;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='flaticon-phone'></i>    info@mail.com</li> " +
                    "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>
<script>
    $("form#contactForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = $('#contactForm').attr('action');
        $.ajax({
            url:url,
            type: 'POST',
            data: formData,
            beforeSend: function(){
                $('#sendBtn').html(' <span style="margin-left: 4px;color: white">لحظة </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
            },
            complete: function(){


            },
            success: function (data) {
                if (data.status == 200){
                    toastr.success('شكرا لتواصلك سنقوم بالرد عليك في اقرب وقت');
                    $('#contactForm')[0].reset();
                    $('#sendBtn').html('إرسال');
                }else {
                    toastr.warning('Error');
                }
            },
            error: function (data) {
                if (data.status == 500) {
                    $('#sendBtn').html('إرسال');
                    toastr.error('خطأ غير متوقع يرجي اعادة المحاولة');
                }
                else if (data.status == 422) {
                    $('#sendBtn').html('إرسال');
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error(value,key);
                            });
                        }
                    });
                }
            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
@endsection

