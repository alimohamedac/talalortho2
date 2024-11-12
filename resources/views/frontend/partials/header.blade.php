<header id="header" class="hcheader">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-12 col-12">
                <a class="linklogo" href="{{ route('pages.home') }}"><img src="{{ asset('assets/frontend/img/main-logo.png') }}" alt="logo"></a>
                <span class="menubtn"><i class="fa-solid fa-bars"></i></span>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                @include('frontend.partials.navBar')
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 col-12">
                @include('frontend.partials.socialMedia')
            </div>
        </div>
    </div>
</header>
