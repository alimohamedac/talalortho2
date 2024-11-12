@extends('admin.layouts.default')

@section('pageTitle')قبل وبعد@endsection

@section('content')
    <div class="mainbody formdata">
        <div class="headingwbth">
            <h3>قبل وبعد</h3>
            <button class="maindashbtn" type="button" data-bs-toggle="modal" data-bs-target="#createModal">إضافة عنصر</button>
        </div>

        <div class="row titletable">
            <div class="col"><h6>عنوان الصورة </h6></div>
            <div class="col"><h6>الصورة</h6></div>
            <div class="col"><h6>الوصف</h6></div>
            <div class="col"><h6>الاختيار</h6></div>
        </div>

        @foreach($items as $item)
            <div class="row bodytable">
                <div class="col"><span>{{ $item->title }}</span></div>
                <div class="col"><img class="dashaftbfimg" src="{{ Illuminate\Support\Facades\Storage::url($item->image) }}" alt="{{ $item->title }}"></div>
                <div class="col"><span>{{ $item->description }}</span></div>
                <div class="col">
                    <span class="icont">
                        <i class="fa-solid fa-trash" onclick="deleteItem({{ $item->id }})"></i>
                    </span>
                    {{--<form id="deleteForm-{{ $item->id }}" action="{{ route('before-after.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>--}}
                    <span class="icont" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editItem({{ $item }})">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </span>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('modal')
    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">إضافة عنصر</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('before-after.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>إضافة صورة</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label>إضافة عنوان</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label>إضافة الوصف</label>
                            <textarea name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">تعديل العنصر</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="edit_id">
                        <div class="mb-3">
                            <label>تعديل الصورة</label>
                            <input type="file" name="image">
                        </div>
                        <div class="mb-3">
                            <label>تعديل العنوان</label>
                            <input type="text" name="title" id="edit_title" required>
                        </div>
                        <div class="mb-3">
                            <label>تعديل الوصف</label>
                            <textarea name="description" id="edit_description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customScripts')
    <script>
        // Show Create Modal only when needed
        $(document).ready(function() {
            const createModalElement = document.getElementById('createModal');
            if (createModalElement) {
                var createModal = new bootstrap.Modal(createModalElement, {
                    keyboard: false
                });
            }
        });

        // JavaScript function to populate the edit form
        function editItem(item) {
            document.getElementById('edit_id').value = item.id;
            document.getElementById('edit_title').value = item.title;
            document.getElementById('edit_description').value = item.description;
            document.getElementById('editForm').action = '/admin/before-after/' + item.id;

            const editModalElement = document.getElementById('editModal');
            if (editModalElement) {
                var editModal = new bootstrap.Modal(editModalElement);
                editModal.show();
            }
        }

        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
@endsection
