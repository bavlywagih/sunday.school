

<h5 class="card-title mb-3 text-center">Posts</h5>

<div class="d-grid gap-4 kash-page-prop">
    @forelse($kashkols as $kashkol)
        <a href="{{route('Kashkol.show' , $kashkol->id)}}" class="text-decoration-none text-light ">
            <div class="card card-kash-oro" style="width: 100%; height: 100%;">
                <div class="card-body card-body-oro">
                    <h5 class="card-title">{{$kashkol->address}}</h5>
                    <p class="card-subtitle mb-2 text-muted">تحضير بوسطه {{$kashkol->user->username}} </p>
                    <p class="card-text">{{substr($kashkol->content, 0, 50)}} .....</p>
                    <p href="#" class="card-subtitle mb-2 text-muted">{{$kashkol->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>

