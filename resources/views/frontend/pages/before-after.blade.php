@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | قبل وبعد@endsection

@section('content')
    <section class="atfbefimgs">
        <div class="container">
            <h3>قبل وبعد</h3>
            <div class="row">
                @foreach($items->take(9) as $item)
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="aftbfbox">
                            <img src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}">
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
