<div class="col-md-8 w-100 profile-div-prop-col">
    <div class="card mb-3">
        <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">الاسم </h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-text-pro">
                        <span>{{$authname}}</span>
                    </div>
                </div>
            
            @if(!$authphone == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">رقم الهاتف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-text-pro">
                        <span>{{$authphone}}</span>
                    </div>
                </div>
            @endif
            @if(!$authbirthday == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">تاريخ الميلاد</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-text-pro">
                        <span>{{$authbirthday}}</span>
                    </div>
                </div>
            @endif
            @if(!Auth::user()->address == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0 div-pro-id-mt">عنوان المنزل</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                        <span>{{Auth::user()->address}}</span>
                    </div>
                </div>
            @endif
            @if(!Auth::user()->facebook == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0 div-pro-id-mt"> الفيسبوك</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                        <span>{{Auth::user()->facebook}}</span>
                    </div>
                </div>
            @endif
            @if(!Auth::user()->nu_father == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0 div-pro-id-mt"> رقم ولي الامر</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                        <span>{{Auth::user()->nu_father}}</span>
                    </div>
                </div>
            @endif
            @if(!Auth::user()->our_father == 0)
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0 div-pro-id-mt"> اسم اب الاعتراف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary div-pro-id-mt">
                        <span>{{Auth::user()->our_father}}</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
