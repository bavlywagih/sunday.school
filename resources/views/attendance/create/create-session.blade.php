@extends('template.template')
@section('content')
    <div class="div-create-session p-5 pt-2 rounded border" >
        <form method="POST" class="form-create-session" action="{{route('create-session')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="createSessionLabel">انشاء درس</h2>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="session-title" class="form-label">
                                <i class="fa-solid fa-signature"></i>
                                اسم الدرس
                            </label>
                            <input type="text" name="title" class="form-control input-session-title" placeholder="برجاء وضع اسم الدرس هنا " id="session-title">
                        </div>
                        <div class="mb-3 rounded">
                            <label for="session-title" class="form-label">
                                <i class="fa-solid fa-person-chalkboard"></i>
                                الدرس
                            </label>
                            <div class="form-floating rounded">
                                <textarea id="post-editor"  name="body" class="text-end rounded" placeholder="اكتب الدرس هنا " style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-list-ol"></i>
                            <label for="session-title" class="form-label">اهم النقاط في الدرس</label>
                            <div class="form-floating">
                                <textarea  name="point" class="text-end w-100 textarea-point-create-session" placeholder="اكتب اهم النقاط  هنا"></textarea>
                            </div>
                        </div>
                        <div  style="display: flex;align-items: center; " class="mb-3">
                            <label class="select-wrapper mt-2" for='image_src' role="button">
                                <input class="form-control custom-file-input   "  name="file" type="file" id="image_src" multiple>
                            </label>
                            <label for="image_src" role="button"> ارفاق صوره</label>
                        </div>
                        <i class="fa-solid fa-hospital-user"></i>
                        <label for="grade" class="form-label">الفصل</label>
                        <select class="form-select" id="grade" name="grade_id">
                            <option selected value="0">اختار الفصل</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="modal-footer mb-3 mt-3 bg-transparent" style="justify-content: flex-start ; background-color: transparent !important;">
                            <button type="sumit" class="btn btn-success w-50 m-auto ">حفظ</button>
                        </div>
                </div>
            </div>
        </form>
    </div>
@endsection
