@extends('template.template')
@section('content')

    <div class="card  m-auto mt-4 card-create-info-div" style="width: 90% ;" >
        <div class="card-body m-auto">
            <h2 >
                اضافه بعض المعلومات
            </h2>
        </div>
        <div>
            <form action="{{route('information_update' , $user->id )}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label label-create-information" style="padding-right: 65px;">الاسم:</label>
                    <input type="text" style="width: 90% ; "  class="form-control m-auto input-creat-information" id="username" name="username"    placeholder="لا يوجد اسم "  value=" {{$user->username}} "  >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label label-create-information" style="padding-right: 65px;">عنوان المنزل:</label>
                    <input type="text" style="width: 90% ; "  class="form-control m-auto input-creat-information" id="address" name="address"   @if($user->address == null) placeholder="لا يوجد عنوان المنزل هنا "@else value=" {{$user->address}} " @endif >
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label label-create-information" style="padding-right: 65px;">الفيسبوك:</label>
                    <input type="url"  style="width: 90% ;"  class="form-control m-auto input-creat-information"  id="facebook" name="facebook" @if($user->facebook == null) placeholder="لا يوجد رابط فيسبوك هنا "@else value=" {{$user->facebook}} " @endif >
                </div>
                <div class="mb-3">
                    <label for="nu_father" class="form-label label-create-information" style="padding-right: 65px;">رقم الهاتف:</label>
                    <input type="text"  style="width: 90% ;"  class="form-control m-auto input-creat-information" id="nu_father" name="nu_father" @if($user->nu_father == null) placeholder="لا يوجد رقم هاتف هنا "@else value=" {{$user->nu_father}} " @endif>
                </div>
                <div class="mb-3">
                    <label for="nu_father" class="form-label label-create-information" style="padding-right: 65px;">رقم ولى الامر:</label>
                    <input type="text"  style="width: 90% ;"  class="form-control m-auto input-creat-information" id="nu_father" name="nu_father" @if($user->nu_father == null) placeholder="لا يوجد رقم ولي امر هنا "@else value=" {{$user->nu_father}} " @endif>
                </div>
                <div class="mb-3">
                    <label for="our_father" class="form-label label-create-information" style="padding-right: 65px;">اسم اب الاعتراف:</label>
                    <input type="text"  style="width: 90% ;"  class="form-control m-auto input-creat-information" id="our_father" name="our_father" @if($user->our_father == null) placeholder="لا يوجد اسم اب اعتراف هنا "@else value=" {{$user->our_father}} " @endif>
                </div>
                <div class="mb-3">
                    <label for="our_father" class="form-label label-create-information" style="padding-right: 65px;">الفصل:</label>
                    <div class="col-sm-9 text-secondary m-auto" style="width: 90%;">
                        <select class="form-select" id="grade" name="grade_id">
                            <option selected value="0">اختار الفصل</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                </div>
                    <div class="mb-3">
                        <div style="padding-right: 65px; display: flex; align-items: center;" class="div-create">
                            <div>
                                <a href="{{route('more_confirmation' , $user->id)}}">
                                    <i class="fa-solid fa-gear text-icon-inform"></i>
                                </a>
                            </div>
                            <div style="padding-right: 10px;" >
                                <a href="{{route('more_confirmation' , $user->id)}}">
                                    <label  class="form-label text-icon-inform ">  بعض الاعدادات الاخري من هنا </label>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="mb-3 ">
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-success w-50 ">حفظ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
