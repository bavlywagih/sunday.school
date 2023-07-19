@extends('template.template')
@section('content')
    <div class="card w-75 m-auto mt-4 pt-4 div-card-user">
        <table class="table table-user m-auto " style="width: 86%;">
            <div>
                <h2 class="text-center">جدول اسماء المستخدمين</h2>
            </div>
            <div class="mb-3 d-flex flex-row-reverse">
                <form action="">
                    <input type="search" class="form-control w-50 m-auto rounded "     value="{{ request('search') }}" id="searchbyjobname" name="search" placeholder="بحث">
                </form>
            </div>
            <a class="text-decoration-none text-white  m-auto my-2" href="{{route('create')}}">
                <button type="button" class="btn btn-success ">
                    انشاء مستخدم
                </button>
            </a>
            <thead>
                <tr class="table-dark ">
                    <th scope="col">الاسم</th>
                    <th scope="col">  الطايوهات</th>
                    <th scope="col" style="    padding-right: 84px;"> بعض العمليات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                @if ($user->id != Auth()->id() && $user->role < 1 )
                    <tr>
                        <th scope="row"><a href="{{route('profileid' , $user->id )}}">{{$user->username}} </a></th>
                            @if($user->tayo == '')
                            <td> لا يوجد</td>
                            @else
                            <td>{{$user->tayo}}</td>
                            @endif
                        <td class="">
                            <button type="button" class="btn btn-success"><a href="{{route('information' , $user->id )}}" class="text-decoration-none text-white" >تعديل</a></button>
                            <button type="button" class="btn btn-danger"><a  href="{{route('delete_user' , $user->id )}}"  class="text-decoration-none text-white" >حذف</a></button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="{{route('tayo' , $user->id)}}" class="text-white text-decoration-none">طايوهات</a></button>
                        </td>
                    </tr>
                @endif
                @if ($user->id != Auth()->id() && Auth()->user()->role == '3' && $user->role > 0 )
                    <tr>
                        <th scope="row"><a href="{{route('profileid' , $user->id )}}">{{$user->username}} </a></th>
                            @if($user->role == 2)
                                <td> اب كاهن</td>
                            @elseif($user->role == 1)
                                <td> مشرف</td>
                            @endif
                        <td class="">
                            <div>
                                <button type="button" class="btn btn-success"><a href="{{route('information' , $user->id )}}" class="text-decoration-none text-white" >تعديل</a></button>
                                <button type="button" class="btn btn-danger"><a  href="{{route('delete_user' , $user->id )}}"  class="text-decoration-none text-white" >حذف</a></button>
                            </div>
                        </td>
                    </tr>
                @endif
                @empty
                    <td class="list-group-item list-group-item-danger">User Not Found.</td>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
