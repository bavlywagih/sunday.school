@if ($errors->any())
    <div class="errors-container alert alert-danger rounded " style="    width: 95%;margin: 10px auto;}">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
