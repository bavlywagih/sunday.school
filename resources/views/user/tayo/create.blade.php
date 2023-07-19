@extends('template.template')
@section('content')
    <div class="card  m-auto mt-4  div-create-tayo " style="width: 95%;" >
        <div class="card-body">
            اضافه طايوهات
        </div>
        <div class="div-gb-tayo">
            <form action="{{route('tayo_update' , $user->id )}}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="number" style="width: 95%;margin: auto;" id="tayo" placeholder="بجاء وضع الطايوهات"  class="form-control  me-3" value="{{$user->tayo}}" name="tayo">
                </div>
                <div class="mb-3 ">
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-success w-50 ">Success</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


