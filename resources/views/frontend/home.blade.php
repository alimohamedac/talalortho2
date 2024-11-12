@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | الرئيسية@endsection

@section('content')
    <section class="intro">
        <div class="container">
            <div class="maincont">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                        <h6 data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700">دكتور طلال أبا الخيل</h6>
                        <h1 data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="700"><span>استشاري جراحة عظام الأطفال</span> وإطالة الأطراف وتصحيح التشوهات</h1>
                        <p data-aos="zoom-in-up" data-aos-delay="700" data-aos-duration="700">أعد الثقة لمرضاي من خلال العمليات الجراحية الحديثة لتصحيح التشوهات وتطويل القامة</p>
                        <a href="{{ route('pages.appointment') }}" data-aos="zoom-in-up" data-aos-delay="1000" data-aos-duration="700"><span><i class="fa-solid fa-comments"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div>
                        <h4 data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700">عن دكتور طلال أبا الخيل</h4>
                        <p data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="700">{{ $settings['about_home'] ?? '' }}</p>
                    </div>
                    <div>
                        <h4 data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="700">الدراسة</h4>
                        <p data-aos="zoom-in-up" data-aos-delay="700" data-aos-duration="700">{{ $settings['study_home'] ?? '' }}</p>
                    </div>
                </div>
                <div class="col-md">
                    <img src="{{ asset('assets/frontend/img/aboutimg.png') }}" alt="" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="700">
                </div>
            </div>
        </div>
    </section>

    <section class="homenews">
        <div class="container">
            <div class="row">
                <div class="col-md newsitems">
                    <h3>أخبار </h3>
                    <p>استكشف مقالات متخصصة وأخبار طبية محدثة حول أحدث التقنيات والعلاجات في جراحة العظام</p>
                    @foreach($items as $item)
                        <a class="itemlink" href="{{ $item->link }}">
                            <div class="row itemnew" ata-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700">
                                <div class="col-4"><img src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}"></div>
                                <div class="col-8">
                                    <h5>{{ $item->title }}</h5>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    <a class="morelink" href="{{ route('pages.news') }}"> المزيد من الاخبار <span><i class="fa-solid fa-arrow-left-long"></i></span></a>

                </div>
                <div class="col-md aftanbefore">
                    <h3>قبل وبعد</h3>
                    <div data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="700"><img src="{{ Illuminate\Support\Facades\Storage::url($beforeAndAfter->image) }}" alt="{{ $beforeAndAfter->title }}"></div>
                    <a href="{{ route('pages.beforeAfter') }}"> المزيد من الصور <span><i class="fa-solid fa-arrow-left-long"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bookyourtime">
        <div class="container">
            <div class="maincont">
                <h3 data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700">احجز موعدك الآن للحصول على استشارة متخصصة</h3>
                <a href="{{ route('pages.appointment') }}" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="700">حجز موعد</a>
            </div>
        </div>
    </section>
@endsection
