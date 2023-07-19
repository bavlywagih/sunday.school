@extends('template.template')
@section('content')
    @auth
        <div class="container div-cont-attendance mt-2 rounded bg-light-subtle border">
            <div class="row justify-content-center  ">
                <div class="col-md-8 attendance-div-col  ">
                    <div class="card attendance-div-card div-color-attendance shadow-none bg-light-subtle  ">
                        <div class="card-body attendance-div-card-body">
                            @if (Auth::user()->role != 0  )
                            <x-attendance.Create.CreateGrade></x-attendance.Create.CreateGrade>

                                        <div class="d-flex justify-content-center">
                                            <div><button type="button" class="btn btn-success border-0 button-attendance m-2" data-bs-toggle="modal" data-bs-target="#createGrade">انشاء فصل</button></div>
                                            <div><a href="{{route('create_session')}}" class="text-decoration-none"><button type="button" class="btn btn-success border-0 button-attendance m-2" data-bs-toggle="modal" data-bs-target="#createSession">انشاء درس</button></a></div>
                                            @include('attendance/create/collectAttendance')
                                            <div><button type="button" class="btn btn-success border-0 button-attendance m-2" data-bs-toggle="modal" data-bs-target="#collectAttendance">وضع الحضور</button></div>
                                        </div>
                            @endif
                            <div class="d-flex align-items-start mt-3 attendance-div-prop ">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-grades-tab" data-bs-toggle="pill" data-bs-target="#v-pills-grades" type="button" role="tab" aria-controls="v-pills-grades" aria-selected="true">الفصول</button>
                                    @if (Auth::user()->role != '0' )
                                    <a class="text-decoration-none text-center align-center button-attendance p-2 mt-2" href="{{route('users')}}">الاشخاص</a>
                                    @endif
                                </div>
                                <div class="tab-content w-100" id="v-pills-tabContent">
                                    @include('attendance/show/grade')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
