<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="forlogo" href="{{ route('pages.home') }}"><img src="{{ asset('assets/frontend/img/main-logo.png') }}" alt="logo"></a>
            </div>
            <div class="col-12">
                @include('frontend.partials.navBar')
            </div>
            <div class="col-12">
                @include('frontend.partials.socialMedia')
            </div>
        </div>
    </div>
</footer>
