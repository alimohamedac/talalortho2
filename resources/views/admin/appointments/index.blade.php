@extends('admin.layouts.default')

@section('pageTitle')الحجوزات@endsection

@section('content')
    <div class="mainbody formdata">
        <h3>أخر الحجوزات</h3>

        <div class="row titletable">
            <div class="col"><h6>أسم المريض</h6></div>
            <div class="col"><h6>البريد الإلكتروني</h6></div>
            <div class="col"><h6>رقم الجوال</h6></div>
            <div class="col"><h6>الإجراءات المطلوبة</h6></div>
            <div class="col"><h6>الميعاد</h6></div>
            <div class="col"><h6>المرفقات</h6></div>
            <div class="col"><h6>الرسالة</h6></div>
        </div>

        @foreach($appointments as $appointment)
            <div class="row bodytable">
                <div class="col"><span>{{ $appointment->name }}</span></div>
                <div class="col"><span>{{ $appointment->email }}</span></div>
                <div class="col"><span>{{ $appointment->phoneNumber }}</span></div>
                <div class="col"><span>{{ $appointment->requested_procedures }}</span></div>
                <div class="col"><span>{{ Carbon\Carbon::parse($appointment->appointment_date)->translatedFormat('l, j F Y g:i A') }}</span></div>
                <div class="col">
                    <span>ملف</span>
                    @if($appointment->attachments)
                        <a href="{{ route('admin.appointments.download', $appointment->id) }}" class="icont" title="Download File">
                            <i class="fa-solid fa-file"></i>
                        </a>
                    @else
                        <span class="icont" title="No File Available">
                            <i class="fa-solid fa-file"></i>
                        </span>
                    @endif
                </div>
                <div class="col"><span>{{ $appointment->message }}</span></div>
            </div>
        @endforeach
    </div>
@endsection
