@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | الأخبار@endsection

@section('content')
    <section class="patientrules">
        <div class="container">
            <h3>الأخبار</h3>

            <div class="row">
                @foreach($items->take(8) as $item)
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="itemrule" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="700">
                            <a class="newsmorelink" href="{{ $item->link }}">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12"><img src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}"></div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h5>{{ $item->title }}</h5>
                                        <span>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('l, j F Y g:i A') }}</span>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{--<div class="mainpagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">السابق</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">التالي</a></li>
            </ul>
        </nav>
    </div>--}}
@endsection
