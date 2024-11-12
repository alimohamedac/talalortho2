<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('admin.partials.head')

<body>

    <section class="mainpage">
        <div class="maincont">
            <div class="row">
                @include('admin.partials.sideBar')

                <div class="col-9">
                    <div class="bodyheader"><h5><img src="{{ asset('assets/admin/img/main-logo.png') }}">{{ auth()->user()->name }}</h5></div>

                    @yield('content')
                </div>

            </div>
        </div>
    </section>

    @yield('modal')

    @include('admin.partials.footerScripts')

</body>
</html>
