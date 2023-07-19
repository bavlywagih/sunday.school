
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            @if($adminRole)
                @if( request()->route()->getName() === 'edit.profile' )

                @else
                    <div class="btn-profile">
                        <a href="{{ route('edit.profile') }}" class="btn btn-primary">تعديل</a>
                    </div>
                @endif
            @endif
                <div class="litter litter-profile" >
                    <span>{{$litterAuth}}</span>
                    @if($adminRole)
                        <div class="card-title d-flex align-items-center gap-2 " style="font-size: 40px; line-height: 34px;" title="مشرف في الموقع ">
                            <span class="material-symbols-outlined icon-admin-profile rounded-circle">
                                <i class="fa-solid fa-check text-blue"></i>
                            </span>
                        </div>
                    @else
                        <div class=" d-flex align-items-center gap-2 user-admin " title="مستخدم في الموقع ">
                            <i class="fa-regular fa-user icon-user-profile rounded-circle person" style="font-size: 37px !important;width: 22px;height: 25px;"></i>
                        </div>
                    @endif
                </div>
        </div>
    </div>
</div>
