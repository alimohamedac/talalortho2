<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('frontend.partials.head')
<body>
@include('frontend.partials.header')

@yield('content')

@include('frontend.partials.footer')
<div id="button-top">
    <i class="fa-solid fa-chevron-up"></i>
</div>
@include('frontend.partials.footerScripts')

</body>
</html>
