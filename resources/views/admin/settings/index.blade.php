@extends('admin.layouts.default')

@section('pageTitle')الاعدادات العامة@endsection

@section('content')
    <div class="mainbody formdata">
        <h3>الاعدادات العامة</h3>

        <div class="aboutdash">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                <h4>عن دكتور طلال أبا الخيل - الصفحة الرئيسية</h4>
                <div>
                    <textarea name="about_home" rows="5">{{ $settings['about_home'] ?? '' }}</textarea>
                </div>
                <h4>الدراسة - الصفحة الرئيسية</h4>
                <div>
                    <textarea name="study_home" rows="5">{{ $settings['study_home'] ?? '' }}</textarea>
                </div>
                <h4>دكتور طلال أبا الخيل - الصفحة الفرعية</h4>
                <div>
                    <textarea name="about_subpage" rows="5">{{ $settings['about_subpage'] ?? '' }}</textarea>
                </div>
                <h4>المؤهلات العلمية - الصفحة الفرعية</h4>
                <div>
                    <textarea name="study_subpage" rows="5">{{ $settings['study_subpage'] ?? '' }}</textarea>
                </div>

                <div><input type="submit" value="حفظ التغييرات"></div>
            </form>
        </div>

        <div class="general-social">
            <h4>وسائل التواصل</h4>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="whatsapp" placeholder="واتساب" value="{{ $settings['whatsapp'] ?? '' }}">
                    <span><i class="fa-brands fa-whatsapp"></i></span>
                </div>

                <div>
                    <input type="text" name="linkedin" placeholder="لينكد ان" value="{{ $settings['linkedin'] ?? '' }}">
                    <span><i class="fa-brands fa-linkedin-in"></i></span>
                </div>

                <div>
                    <input type="text" name="instagram" placeholder="انتسجرام" value="{{ $settings['instagram'] ?? '' }}">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </div>

                <div>
                    <input type="text" name="tiktok" placeholder="تيك توك" value="{{ $settings['tiktok'] ?? '' }}">
                    <span><i class="fa-brands fa-tiktok"></i></span>
                </div>

                <div>
                    <input type="text" name="snapchat" placeholder="سناب شات" value="{{ $settings['snapchat'] ?? '' }}">
                    <span><i class="fa-brands fa-snapchat"></i></span>
                </div>

                <div>
                    <input type="text" name="twitter" placeholder="أكس" value="{{ $settings['twitter'] ?? '' }}">
                    <span><i class="fa-brands fa-x-twitter"></i></span>
                </div>

                <div>
                    <input type="text" name="facebook" placeholder="فيسبوك" value="{{ $settings['facebook'] ?? '' }}">
                    <span><i class="fa-brands fa-facebook-f"></i></span>
                </div>

                <div><input type="submit" value="حفظ التغييرات"></div>
            </form>
        </div>

        <!-- <div class="general-social">
                <h4>تغيير كلمة المرور</h4>
                <form>
                  <div><input type="password" placeholder="كلمة المرور السابقة" name=""> </div>
                  <div><input type="password" placeholder="كلمة المرور الجديدة" name=""> </div>
                  <div><input type="password" placeholder="تأكيد كلمة المرور الجديدة" name=""></div>
                  <div><input type="submit" value="حفظ التغييرات"></div>
                </form>
              </div> -->
    </div>
@endsection
