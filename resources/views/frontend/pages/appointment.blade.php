@extends('frontend.layouts.default')

@section('pageTitle')دكتور طلال | تواصل مع فريق العمل@endsection

@section('content')
    <section class="contact">
        <div class="container">
            <h3>حجز موعد</h3>
            <div class="upform">

                @if(session('success'))
                    <div>{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pages.appointment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label>الأسم كامل</label>
                            <input type="text" id="name" name="name" placeholder="اكتب الاسم كاملا" required>
                        </div>
                        <div class="col-6">
                            <label>اختيار الموعد</label>
                            <input type="datetime-local" id="appointment_date" name="appointment_date" required value="{{ old('appointment_date', \Carbon\Carbon::now()->format('Y-m-d\TH:i')) }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>البريد الالكتروني</label>
                            <input type="email" placeholder="info@gmail.com" id="email" name="email">
                        </div>
                        <div class="col-6">
                            <label>الأجراء المطلوب</label>
                            <input type="text" id="requested_procedures" name="requested_procedures" placeholder="كشف / متابعة / .." required>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label>رقم الجوال</label>
                            <input type="tel" placeholder="اكتب رقم الجوال" id="phoneNumber" name="phoneNumber" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label>رسالتك</label>
                            <textarea placeholder="اكتب رسالتك هنا" id="message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="custom-inpfile">
                        <div class="repl-inpfile">
                            <span><i class="fa-solid fa-cloud-arrow-up"></i></span>
                            <h5>تحميل ملف</h5>
                        </div>
                        <input type="file" name="attachments" accept=".pdf, image/*">
                    </div>
                    <div class="row">
                        <div class="col-12 upsubmitbtn">
                            <input type="submit" value="حجز موعد">
                        </div>
                    </div>
                </form>
            </div>
            <div class="contactdata">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.37709964789!2d31.223444820824476!3d30.059483810319833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1583627356495!5m2!1sen!2seg" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="row">
                    <div class="col-md col-sm-6 col-6">
                        <h6><span><i class="fa-solid fa-location-dot"></i></span> العنوان</h6>
                        <p>مستشفى الحبيب بالرياض</p>
                    </div>
                    <div class="col-md col-sm-6 col-6">
                        <h6><span><i class="fa-solid fa-clock"></i></span> المواعيد</h6>
                        <p>الأحد _ الخميس 12:00 م - 08:00 م</p>
                    </div>
                    <div class="col-md col-sm-6 col-6">
                        <h6><span><i class="fa-solid fa-phone"></i></span> رقم الجوال</h6>
                        <p>0112833333</p>
                    </div>
                    <div class="col-md col-sm-6 col-6">
                        <h6><span><i class="fa-solid fa-envelope"></i></span> البريد الالكتروني</h6>
                        <p>Talalabaelhkail@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
