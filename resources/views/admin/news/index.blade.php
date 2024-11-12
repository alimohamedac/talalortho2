@extends('admin.layouts.default')

@section('pageTitle')الأخبار@endsection

@section('content')
    <div class="mainbody formdata">
        <div class="headingwbth">
            <h3>الأخبار</h3>
            <button class="maindashbtn" type="button" data-bs-toggle="modal" data-bs-target="#createModal">إضافة خبر</button>
        </div>

        <div class="row titletable">
            <div class="col"><h6>عنوان</h6></div>
            <div class="col"><h6>الصور</h6></div>
            <div class="col"><h6>الوصف</h6></div>
            <div class="col"><h6>الاختيار</h6></div>
        </div>

        @foreach($items as $item)
            <div class="row bodytable">
                <div class="col"><span>{{ $item->title }}</span></div>
                <div class="col">
                    <img class="newsdashimg" src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}">
                </div>
                <div class="col"><span>{{ $item->description }}</span></div>
                <div class="col">
                    <span class="icont">
                        <i class="fa-solid fa-trash"></i>
                    </span>
                    <span class="icont" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </span>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('modal')
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">إضافة خبر</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>إضافة عنوان</label>
                            <input type="text" name="title" placeholder="أدخل العنوان هنا.." required>
                        </div>
                        <div>
                            <label>إضافة صورة</label>
                            <div class="custom-inpfile">
                                <div class="repl-inpfile">
                                    <span><i class="fa-solid fa-cloud-arrow-up"></i></span>
                                    <h5>تحميل ملف</h5>
                                </div>
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div>
                            <label>إضافة الوصف</label>
                            <textarea name="description" placeholder="" rows="3"></textarea>
                        </div>
                        <div>
                            <label>إضافة الرابط</label>
                            <input type="text" name="link" placeholder="أدخل الرابط هنا..">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">أغلاق</button>
                            <button type="submit" class="btn maindashbtn">حفظ التغييرات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل الخبر</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            <label>تعديل العنوان</label>
                            <input type="text" name="" placeholder="">
                        </div>
                        <div>
                            <label>تعديل الصورة</label>
                            <div class="custom-inpfile">
                                <div class="repl-inpfile">
                                    <span><i class="fa-solid fa-cloud-arrow-up"></i></span>
                                    <h5>تحميل ملف</h5>
                                </div>
                                <input type="file" name="">
                            </div>
                        </div>
                        <div>
                            <label>تعديل الوصف</label>
                            <textarea name="" placeholder="" rows="3"></textarea>
                        </div>
                        <div>
                            <label>تعديل الرابط</label>
                            <input type="text" name="" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">أغلاق</button>
                    <button type="button" class="btn maindashbtn">حفظ التغييرات</button>
                </div>
            </div>
        </div>
    </div>
@endsection
