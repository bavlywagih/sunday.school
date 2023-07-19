@extends('template.template')
@section('content')

<div class="card w-50 m-auto div-create-kash " style=" margin-top: 10px !important; margin-buttom: 10px !important;" >
    <div class="card-body m-auto ">
        <a href="{{route('Kashkol.create')}}">
            <button type="button" class="btn btn-success btn-div-create-kash border-0">انشاء تحضير جديد</button>
        </a>
    </div>
</div>
@include('kashkol/kashkol_prop')

{{--
@foreach ($kashkols as $kashkol)
<h2>{{$kashkol->user->username}}</h2>
@endforeach --}}

@endsection
