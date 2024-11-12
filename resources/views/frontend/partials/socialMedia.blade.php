<div class="upsocial">
    @if($settings['whatsapp'])
        <a href="https://wa.me/{{ $settings['whatsapp'] }}?text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85%D8%8C%20%D9%84%D8%AF%D9%8A%20%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1." target="_blank"><span><i class="fa-brands fa-whatsapp"></i></span></a>{{--+966 53 485 2450--}}
    @endif
    @if($settings['linkedin'])
        <a href="https://sa.linkedin.com/in/talal-abalkhail-100a7187" target="_blank"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
    @endif
    @if($settings['instagram'])
        <a href="https://www.instagram.com/talalortho/?igsh=MXJ5cTcwcXIwbGxiYw%3D%3D" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>
    @endif
    @if($settings['tiktok'])
        <a href="https://www.tiktok.com/@talalortho?_t=8r913jxWiCg&_r=1" target="_blank"><span><i class="fa-brands fa-tiktok"></i></span></a>
    @endif
    @if($settings['snapchat'])
        <a href="https://www.snapchat.com/add/talalortho?share_id=JBGRMk3Bdi8&locale=ar-EG" target="_blank"><span><i class="fa-brands fa-snapchat"></i></span></a>
    @endif
    @if($settings['twitter'])
        <a href="https://x.com/Talal_abalkhail?t=QWL2VXgYXa3muFmkrkRtoA&s=09" target="_blank"><span><i class="fa-brands fa-x-twitter"></i></span></a>
    @endif
    @if($settings['facebook'])
        <a href="https://www.facebook.com/{{ $settings['facebook'] }}/" target="_blank"><span><i class="fa-brands fa-facebook"></i></span></a>
    @endif
</div>
