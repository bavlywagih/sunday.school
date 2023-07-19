@extends('template.template')
@section('content')
    <div class="w-75 m-auto mt-4 mobile-width div-one-grade rounded" >
        <main class=" card  m-10 w-100 rounded">
            <h4 style="margin: 10px">{{$grades->title}}</h4>
            <hr class="mb-3" style="margin: 10px;">
            <h5 class="card-title mb-3" style="margin: 10px;" >الدروس</h5>
            <div class="d-grid gap-4" style="margin: 10px;">
                @forelse($grades->sessions as $session)
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;justify-content: space-between;">
                                <h5 class="card-title">{{$session->title}}</h5>
                                <p class="card-text">{{$session->created_at->diffForHumans()}}</p>
                            </div>
                            <a href="{{ route('session' , $session->id ) }}" class="btn btn-primary btn-show-grade" style="margin-top: 10px; width: 100%;" >مشاهده الدرس</a>
                        </div>
                    </div>
                @empty
                    لايوجد دروس
                @endforelse
            </div>
        </main>
    </div>
@endsection

