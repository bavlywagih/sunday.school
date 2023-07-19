@if ($checkadmin)

<div style="width: 50%;margin: auto; padding-bottom: 10px !important; " class="rounded div-round-tiym">
    <div class="m-2 tinymce-editor-create ">
        <h1 class="container h1-tinymce-editor text-center ">صفحه انشاء منشور جديد</h1>
        <form method="post" action="{{ $create }}" enctype="multipart/form-data" class="form-new {{ route('attendance') === 'attendance' ? 'active' : '' }}" id="create-post-form">
            @csrf
            <div class="w-50 m-auto mt-0 mobile-width div-tinymce-editor-create" style="width: 95% !important;" >
            <div class="w-50 m-auto mt-0 mobile-width div-tinymce-editor-create" style="width: 95% !important;" >
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <textarea id="post-editor"  name="body" class="text-end" placeholder="{{ $AuthUsername }} اكتب ما تفكر فيه هنا" cols="50"></textarea>
                @include('components.head.tinymce-config')
                <div  style="display: flex;flex-direction: row-reverse;align-items: center;">
                    <label for="image_src" role="button"> ارفاق صوره</label>
                    <label class="select-wrapper mt-2" for='image_src' role="button">
                        <input class="form-control custom-file-input   "  name="image" type="file" id="image_src" multiple>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3 border-0 button-div-tinymce-editor-create ">ارسال</button>
            </div>
        </form>
    </div>
</div>
</div>


@endif


