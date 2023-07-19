@extends('template.template')
@section('content')

@auth
<div class="div-library-card " >

    <a href="https://drive.google.com/folderview?id=1C4mMKVMJ1uBXlFdbNufdS__uclpZUEB7" class="text-decoration-none">
        <div class="card rounded h-100" style="width: 18rem;margin: 1rem; padding: 1rem;">
            <div class="card-body">
                <h5 class="card-title text-decoration-none">مكتبه الكترونيه : </h5>
                <p class="card-text">مكتبة تضم اكثر من 3000 كتاب في شتي المواضيع الدينيه والمبسطه للاطفال والكبار</p>
            </div>
        </div>
    </a>

    <a href="#" class="text-decoration-none">
            <div class="card rounded h-100"  style="width: 18rem; margin: 1rem; padding: 1rem;">
                <div class="card-body">
                    <h5 class="card-title">المواضيع</h5>
                    <p class="card-text">قريباً</p>
                </div>
            </div>
    </a>

</div>
@endauth
@endsection
