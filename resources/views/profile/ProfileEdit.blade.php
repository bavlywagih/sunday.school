@extends('template.template')
@section('content')
<div class="container div-edit-pro-cont">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3 w-100">
                <x-profile.profile-litter></x-profile.profile-litter>
            </div>
            <form class="col-md-8 w-100 form-pro-edit" action="/profile-update/{{Auth::user()->id}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">الاسم </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="username" class="form-control" value="{{Auth::user()->username}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">رقم الهاتف</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                    <input type="number" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">تاريخ الميلاد</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="date" name="birthday" class="form-control" value="{{Auth::user()->birthday}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0"> الفصل</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select class="form-select" id="grade" name="grade_id">
                                    <option selected value="0">اختار الفصل</option>
                                    @foreach($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">العنوان</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if (Auth::user()->address ==null)
                                
                                <input type="text" name="address" class="form-control" placeholder="لا يوجد عنوان">
                                @else
                                <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}">
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">رابط الفيس بوك</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if (Auth::user()->facebook ==null)
                                
                                <input type="text" name="facebook" class="form-control" placeholder="لا يوجد رابط فيس بوك">
                                @else
                                <input type="text" name="facebook" class="form-control" value="{{Auth::user()->facebook}}">
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">رقم ولي الامر</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if (Auth::user()->nu_father ==null)
                                <input type="text" name="nu_father" class="form-control" placeholder="لا يوجد رقم ولي الامر">
                                @else
                                <input type="text" name="nu_father" class="form-control" value="{{Auth::user()->nu_father}}">
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">اسم اب الاعتراف</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if (Auth::user()->our_father ==null)
                                <input type="text" name="our_father" class="form-control" placeholder="لا يوجد رقم ولي الامر">
                                @else
                                <input type="text" name="our_father" class="form-control" value="{{Auth::user()->our_father}}">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary w-100" type="submit">ارسال</button>
            </form>
        </div>
    </div>
</div>
@endsection
