@extends('admin.layouts.default')

@section('pageTitle')تعليمات المرضي@endsection

@section('content')
    <div class="mainbody formdata">
        <div class="headingwbth">
            <h3>تعليمات المرضي</h3>
            <button class="maindashbtn" type="button" data-bs-toggle="modal" data-bs-target="#createModal">إضافة إرشادات</button>
        </div>

        <div class="row parules">
            @foreach($instructions as $instruction)
                <div class="col-4">
                    <div class="mainbox">
                        <img src="{{ Illuminate\Support\Facades\Storage::url($instruction->image) }}" alt="{{ $instruction->title }}">
                        <h5>{{ $instruction->title }}</h5>
                        <span>{{ Carbon\Carbon::parse($instruction->created_at)->translatedFormat('l, j F Y g:i A') }}</span>
                        <p>{{ $instruction->description }}</p>
                        <div class="choosebtnbox">
                            <span class="icont">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                            <span class="icont" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

@section('modal')
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">إضافة ارشادات</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('patient_instructions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <label>إضافة عنوان</label>
                            <input type="text" name="title" placeholder="أدخل العنوان هنا.." required>
                        </div>
                        <div>
                            <label>إضافة التاريخ</label>
                            <input type="datetime-local" name="created_at" placeholder="" value="{{ old('appointment_date', \Carbon\Carbon::now()->format('Y-m-d\TH:i')) }}">
                        </div>
                        <div>
                            <label>إضافة الوصف</label>
                            <textarea name="description" placeholder="" rows="3"></textarea>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل الفقرة</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div>
                            <label>تعديل صورة</label>
                            <div class="custom-inpfile">
                                <div class="repl-inpfile">
                                    <span><i class="fa-solid fa-cloud-arrow-up"></i></span>
                                    <h5>تحميل ملف</h5>
                                </div>
                                <input type="file" name="">
                            </div>
                        </div>
                        <div>
                            <label>تعديل العنوان</label>
                            <input type="text" name="" placeholder="">
                        </div>
                        <div>
                            <label>تعديل التاريخ</label>
                            <input type="datetime-local" name="" placeholder="">
                        </div>
                        <div>
                            <label>تعديل الوصف</label>
                            <textarea name="" placeholder="" rows="3"></textarea>
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
