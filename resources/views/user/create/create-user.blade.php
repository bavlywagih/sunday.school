@extends('template.template')
@section('content')
@auth
<div class="card w-75 m-auto card-create-user my-2 " >
    <div class="card-body text-center">
        <h2>انشاء مستخدم جديد</h2>
    </div>
    <div class="card-body">
        <form action="{{route('user')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">الاسم الازم لتسجيل الدخول:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اكتب الاسم الازم  لتسجيل الدخول هنا:">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">الاسم:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="اكتب الاسم هنا:">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">كلمه المرور:</label>
                <input type="password" class="form-control" id="username" name="password" placeholder="اكتب الاسم هنا:">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">رقم الهاتف:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="اكتب رقم الهاتف هنا:">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">تاريخ الميلاد:</label>
                <input type="date"  class="form-control" id="birthday" name="birthday" placeholder="اكتب تاريخ الميلاد هنا:">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label" >عنوان المنزل:</label>
                <input type="text"  class="form-control " id="address" name="address" placeholder="لا يوجد عنوان المنزل هنا ">
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label" >الفيسبوك:</label>
                <input type="url"   class="form-control "  id="facebook" name="facebook" placeholder="لا يوجد رابط فيسبوك هنا " >
            </div>
            <div class="mb-3">
                <label for="nu_father" class="form-label" >رقم ولى الامر:</label>
                <input type="text"   class="form-control " id="nu_father" name="nu_father"  placeholder="لا يوجد رقم ولي امر هنا ">
            </div>
            <div class="mb-3">
                <label for="our_father" class="form-label" >اسم اب الاعتراف:</label>
                <input type="text"    class="form-control " id="our_father" name="our_father"  placeholder="لا يوجد اسم اب اعتراف هنا ">
            </div>
            @if (Auth::user()->role >= '1')
                <div class="mb-3">
                    <label for="birthday" class="form-label">اختيار:</label>
                    <select class="form-select " name="role" aria-label="Default select example">
                        <option  selected value="0">مستخدم</option>
                        <option value="1">مشرف</option>
                        <option value="2">اب كاهن</option>
                        <option value="3">سوبر مشرف</option>
                    </select>
                </div>
            @endif

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </form>
    </div>
</div>


@endauth
@endsection
