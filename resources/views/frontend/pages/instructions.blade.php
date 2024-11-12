@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | تعليمات المرضي@endsection

@section('content')
    <section class="patientrules">
        <div class="container">
            <h3>تعليمات المرضى</h3>

            <div class="row">
                @foreach($items->take(8) as $item)
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="itemrule" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="700">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-12"><img src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}"></div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <h5>{{ $item->title }}</h5>
                                    <span>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('l, j F Y g:i A') }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
