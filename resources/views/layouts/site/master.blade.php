<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title> المهندس للسيارات</title>
    @include('layouts.site.head')
</head>
<body class="comon-index">
<div class="page_loader"></div>
@include('layouts.site.header')

    @yield('content')

@include('layouts.site.footer')
@include('layouts.site.scripts')
@toastr_js
@toastr_render
</body>
</html>
