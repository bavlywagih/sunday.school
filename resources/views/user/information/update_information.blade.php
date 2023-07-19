@extends('template.template')
@section('content')
    <div class="card  m-auto mt-4 card-create-info-div" style="width: 90% ;" >
        <div class="card-body m-auto">
            <h2>
                تعديل المعلومات المهمه
            </h2>
        </div>
        <div>
            <form action="{{route('update_information_finished' , $user->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="password" class="form-label label-create-information" style="padding-right: 65px;">  الباسورد الجديد:</label>
                    <input type="text" style="width: 90% ; "  class="form-control m-auto input-creat-information" id="password" name="password" placeholder="برجاء وضع الباسورد الجديد ">
                </div>
                <div class="mb-3 ">
                    <label  class="form-label label-create-information" style="padding-right: 65px;">اختيار:</label>
                    <select class="form-select form-control m-auto input-creat-information" style="width: 90% ; "  name="role" aria-label="Default select example">
                        <option  selected value="0">مستخدم</option>
                        <option value="1">مشرف</option>
                        <option value="2">اب كاهن</option>
                        <option value="3">سوبر مشرف</option>
                    </select>
                </div>
                <div class="mb-3 ">
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-success w-50 ">المتابعه</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
