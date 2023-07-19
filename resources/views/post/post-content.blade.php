<div class="post-content ">
    <h5 class="card-title gap-2 my-2">
    <div class="post-content-d-flex">
        <div class="username d-flex align-items-center gap-2">{{ $author }}</div>
        <br>
        <br>
        <div class="post-content-d-flex" >
            <div class="dates text-muted fs-6 fw-normal ms-auto">{{ $postedOn }}</div>
        </div>
    </div>
</h5>
<div class="fullbody">
    <p class="card-text ">{!! $fullBody !!}</p>
</div>
    @if($image != '' )
        <div>
            <img style="border-radius: 0.25rem !important; display: block;margin-left: auto;margin-right: auto;width: 50%;" src="{{$image}}">
        </div>
    @endif
</div>
