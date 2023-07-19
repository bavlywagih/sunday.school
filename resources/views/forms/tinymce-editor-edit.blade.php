@if ($nameandrole)
<div style="width: 50%;margin: auto; box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);" class="rounded div-round-tiym">
    <div class="m-2 tinymce-editor-create  ">
        <h1 class="container text-center h1-tinymce-editor">صفحه تعديل المنشور </h1>
        <div>
            <form method="post" action="{{ $routepostid }}" class="form-new" id="create-post-form"enctype="multipart/form-data">
                @csrf
                <div class="w-50 m-auto mt-0 mobile-width div-tinymce-editor-create " style="width: 95% !important; " >
                    <input type="hidden" name="user_id" value="{{$Authid}}">
                    <textarea id="post-editor"   name="body" class="text-end border" placeholder="{{$AuthUsername}} اكتب ما تفكر فيه هنا" cols="50">{!! $bodypost !!}</textarea>
                    <button type="submit" style="margin-bottom: 10px;" class="btn btn-primary w-100 mt-3 border-0 button-div-tinymce-editor-create ">ارسال</button>
                </div>
                <div  style="display: flex;flex-direction: row-reverse;align-items: center;" class="p-2">
                    <label for="image_src" role="button"> ارفاق صوره</label>
                    <label class="select-wrapper mt-2" for='image_src' role="button">
                        <input class="form-control custom-file-input   "  name="image" type="file" id="image_src" multiple>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

