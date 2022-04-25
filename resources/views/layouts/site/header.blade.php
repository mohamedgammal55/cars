<!-- Top header start -->
<header class="top-header bg-active" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i>+55-4XX-634-7071</a>
                    <a href="tel:  info@mail.com"><i class="fa fa-envelope"></i>  info@mail.com</a>
                    <a href="tel:  info@mail.com"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5">
                <ul class="top-social-media pull-left">
                    @if(user()->check())
                        <a href="{{route('profile')}}" class="sign-in">{{user()->user()->name}}</a>
                        <a href="{{route('siteLogout')}}" class="sign-in"><i class="fa fa-sign-out"></i> تسجيل الخروج </a>
                    @else
                    <li>
                        <a href="{{route('siteLogin')}}" class="sign-in"><i class="fa fa-sign-in"></i> دخول </a>
                    </li>
                    <li>
                        <a href="{{route('siteRegister')}}" class="sign-in"><i class="fa fa-user"></i> تسجيل  </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header sticky-header sh-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo-2" href="{{route('/')}}">
                <img src="{{asset('site')}}/img/logos/black-logo.svg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" id="drawer">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{route('/')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الرئيسية
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            السيارات
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="car-list-leftsidebar.html"> كل السيارات </a>
                            <a class="dropdown-item" href="car-details.html"> تفاصيل السيارة   </a>


                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('about')}}" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            من نحن
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('posts')}}" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الأخبار
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('contact')}}"> تواصل معنا </a>
                    </li>
                    <li class="nav-item dropdown m-hide">
                        <a href="#full-page-search" class="nav-link h-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{asset('site')}}/img/logos/black-logo.svg" alt="logo">
        </div>
        <div class="sidebar-navigation">
            <ul class="menu-list">
                <li><a href="{{route('/')}}" class="active pt0"> الرئيسية </a>

                </li>
                <li>
                    <a href="car-list-leftsidebar.html">  كل السيارات  </a>

                </li>


                <li><a href="{{route('about')}}">من نحن </a>

                </li>
                <li><a href="{{route('posts')}}">الاخبار </a>
                </li>
                <li>
                    <a href="{{route('contact')}}"> تواصل معنا</a>
                </li>
                <li>
                    <a href="#full-page-search">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">   كن على إتصال  </h3>
            <div class="get-in-touch-box d-flex mb-2">
                <i class="flaticon-phone"></i>
                <a href="tel:0477-0477-8556-552">0477 8556 552</a>
            </div>
            <div class="get-in-touch-box d-flex mb-2">
                <i class="flaticon-mail"></i>
                <div class="media-body">
                    <a href="#">  info@mail.com</a>
                </div>
            </div>

        </div>

    </div>
</nav>
<!-- Sidenav end -->
