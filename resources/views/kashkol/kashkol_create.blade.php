@extends('template.template')
@section('content')

<div class="card  m-auto mt-2  kashkol-create-d-mt " style="width: 95% !important;">
    <div class="kashkol-create-b-g-r-d ">
        <h2 class="m-3 kashkol-create-color">انشاء تحضير جديد</h2>
    </div>
    <div class="card-body">
        <form action="{{route('Kashkol.create.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="mb-3">
                <label for="address" class="form-label ">العنوان</label>
                <input type="text" placeholder="اكتب عنوان الدرس هنا" name="address" class="form-control input-form-kashkol" id="address" >
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">المحتوي</label>
                <textarea id="content" placeholder="اكتب المحتوي هنا" name="content" rows="10" cols="30" class="form-control textarea-Kashkol"></textarea>
            </div>
            <div class="mb-3" style="display: flex;flex-direction: row; align-items: center;">
                <label class="select-file mt-2" for='image_src' role="button">
                    <input class="form-control custom-file-input   "  name="file" type="file" id="image_src" multiple>
                </label>
                <label for="image_src" class="image_src" role="button"> ارفاق ملف </label>
            </div>
            <button class="btn btn-success w-50 m-auto d-block   border-0 bu-kashkol-create" type="submit">ارسال</button>
        </form>
    </div>
</div>
@endsection
