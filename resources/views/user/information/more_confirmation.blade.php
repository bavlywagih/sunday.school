@extends('template.template')
@section('content')
    <div class="card  m-auto mt-4 card-create-info-div" style="width: 90% ;" >
        <div class="card-body m-auto">
            <h2>
                برجاء وضع الباسورد للمتابعه
            </h2>
        </div>
        <div>
            <form action="{{route('more_confirmation_update', $user->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="password" class="form-label label-create-information" style="padding-right: 65px;">الباسورد:</label>
                    <input type="text" style="width: 90% ; "  class="form-control m-auto input-creat-information" id="password" name="password" placeholder="برجاء وضع الباسورد للمتابعه">
                </div>
                <div class="mb-3  ">
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-success w-50 ">المتابعه</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
