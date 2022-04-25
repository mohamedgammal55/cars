<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('home')}}">
            <img src="{{asset('site/img/vs.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('home')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('sliders.index')}}">
                <i class="fe fe-camera side-menu__icon"></i>
                <span class="side-menu__label">الصور المتحركة</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('categories.index')}}">
                <i class="fe fe-bold side-menu__icon"></i>
                <span class="side-menu__label">ماركات وموديلات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('cars.index')}}">
                <i class="fa fa-car side-menu__icon"></i>
                <span class="side-menu__label">السيارات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('city.index')}}">
                <i class="fe fe-map side-menu__icon"></i>
                <span class="side-menu__label">قائمة المدن</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="fe fe-info side-menu__icon"></i>
                <span class="side-menu__label">صفحة من نحن</span><i class="angle fa fa-angle-left"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="{{route('about.index')}}" class="slide-item">تغير المحتوي</a></li>
                <li><a href="{{route('brands.index')}}" class="slide-item">الشركات</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('posts.index')}}">
                <i class="fe fe-file-text side-menu__icon"></i>
                <span class="side-menu__label">المقالات والاخبار</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('team.index')}}">
                <i class="fe fe-user-plus side-menu__icon"></i>
                <span class="side-menu__label">فريق العمل</span>
            </a>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="fe fe-mail side-menu__icon"></i>
                <span class="side-menu__label">رسائل العملاء</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('log-out')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
