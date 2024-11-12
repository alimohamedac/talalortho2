<div class="col-3">
    <div class="dashbordmenu">
        <div class="dashlogo"><img src="{{ asset('assets/admin/img/main-logo.png') }}" alt=""></div>
        <ul>
            <!-- <li><a href="#"><span><i class="fa-solid fa-house"></i></span> الرئيسية</a></li> -->
            <li class="{{ request()->segment(2) == 'appointments' ? 'active' : ''}}><a href="{{ route('admin.appointments.index') }}"><span><i class="fa-regular fa-calendar-days"></i></span> الحجوزات</a></li>
            <li class="{{ request()->segment(2) == 'before-after' ? 'active' : ''  }}"><a href="{{ route('before-after.index') }}"><span><i class="fa-solid fa-code-compare"></i></span> قبل وبعد</a></li>
            <li class="{{ request()->segment(2) == 'patient_instructions' ? 'active' : '' }}"><a href="{{ route('patient_instructions.index') }}"><span><i class="fa-regular fa-file-lines"></i></span> تعليمات المرضي</a></li>
            <li class="{{ request()->segment(2) == 'news' ? 'active' : '' }}"><a href="{{ route('news.index') }}"><span><i class="fa-regular fa-newspaper"></i></span> الاخبار</a></li>
            <li class="{{ request()->segment(2) == 'settings' ? 'active' : '' }}"><a href="{{ route('admin.settings.index') }}"><span><i class="fa-solid fa-gears"></i></span> الاعدادات</a></li>
            <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                    تسجيل الخروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</div>
