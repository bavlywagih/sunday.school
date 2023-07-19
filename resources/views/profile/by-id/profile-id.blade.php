@extends('template.template')
@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 w-100 div-profile-id-col">
                    <div class="card">
                        <div class="card-body ">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if (Auth::check() && Auth::user()->role >= 1 )
                                    <div class="btn-profile" >
                                        <a href="{{ route('information' , $user->id)}}" class="btn btn-primary">تعديل</a>
                                    </div>
                                @endif
                                <div class="litter litter-profile" >
                                    <span>{{$user->username[0] }}</span>
                                    @if($user->role >= 1)
                                        <div class="card-title d-flex align-items-center gap-2 " style="font-size: 40px;line-height: 34px;" title="مشرف  في الموقع ">
                                            <span class="material-symbols-outlined icon-admin-profile rounded-circle">
                                                <i class="fa-solid fa-check text-blue"></i>
                                            </span>
                                        </div>
                                    @else
                                        <div class=" d-flex align-items-center gap-2 user-admin " title="مستخدم في الموقع ">
                                            <i class="fa-regular fa-user icon-user-profile rounded-circle person" style="font-size: 37px !important;width: 22px;height: 25px;"></i>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 w-100 div-md-pro-id">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2 div-pro-id-mt">
                                <div class="col-sm-3 div-md-pro-id">
                                    <h6 class="mb-0 div-pro-id-mt" >الاسم </h6>
                                </div>
                                <div class="col-sm-9 text-secondary div-pro-id-mt">
                                    <span>{{$user->username}}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0 div-pro-id-mt">رقم الهاتف</h6>
                                </div>
                                <div class="col-sm-9 text-secondary div-pro-id-mt">
                                    <span>{{$user->phone}}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0 div-pro-id-mt">تاريخ الميلاد</h6>
                                </div>
                                <div class="col-sm-9 text-secondary div-pro-id-mt">
                                    <span>{{$user->birthday}}</span>
                                </div>
                            </div>
                            @if(!$user->address == '')
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 div-pro-id-mt">عنوان المنزل</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                                        <span>{{$user->address}}</span>
                                    </div>
                                </div>
                            @endif
                            @if(!$user->facebook == '')
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 div-pro-id-mt"> الفيسبوك</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                                        <span>{{$user->facebook}}</span>
                                    </div>
                                </div>
                            @endif
                            @if(!$user->nu_father == '')
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 div-pro-id-mt"> رقم ولي الامر</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                                        <span>{{$user->nu_father}}</span>
                                    </div>
                                </div>
                            @endif
                            @if(!$user->our_father == '')
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 div-pro-id-mt"> اسم اب الاعتراف</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                                        <span>{{$user->our_father}}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
