@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | عن الدكتور طلال@endsection

@section('content')
    <section class="aboutdrtalal">
        <div class="container">
            <h3>دكتور طلال أبا الخيل</h3>
            <div class="row">
                <div class="col-md-5 col-sm-12 col-12"><img src="{{ asset('assets/frontend/img/aboutdrtalal.png') }}" alt="" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700"></div>
                <div class="col-md-7 col-sm-12 col-12" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="700">
                    <p>{{ $settings['about_subpage'] ?? '' }}</p>
                    <h4>المؤهلات العلمية</h4>
                    <p>{{ $settings['study_subpage'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
